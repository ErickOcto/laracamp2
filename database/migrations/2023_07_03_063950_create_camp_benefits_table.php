<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            // 1st Method
            // $table->bigInteger('camp_id')->unsigned();
            // $table->unsignedBigInteger('camp_id');

            $table->id();
            $table->foreignId('camp_id')->contrained();
            $table->string('name');
            $table->timestamps();

            // 1st method
            // $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camp_benefits');
    }
};
