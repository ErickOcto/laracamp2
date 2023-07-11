<?php

namespace App\Http\Controllers\Admin;

use App\Models\Discount;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Disount\Store;
use App\Http\Requests\Admin\Disount\Update;


class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discounts = Discount::all();
        return view('admin.discount.index', [
            'discounts' => $discounts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.discount.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $discount = Discount::create($request->all());
        $request->session()->flash('success', 'A new discount has been created');
        return redirect(route('admin.discount.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discount $discount)
    {
        return view('admin.discount.edit', [
            'discount' => $discount
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Discount $discount)
    {
        $discount->update($request->all());
        $request->session()->flash('success', "Discount {$discount->name} Has Been Updated");
        return redirect(route('admin.discount.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requeat $request, Discount $discount)
    {
        $discount->delete();
        $request->session()->flash('error', "Discount {$discount->name} Has Been Deleted");
        return redirect(route('admin.discount.index'));
    }
}
