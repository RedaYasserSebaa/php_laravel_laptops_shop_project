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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('Brand');
            $table->string('Name');
            $table->double('Price');
            $table->string('Display');
            $table->string('CPU');
            $table->string('GPU');
            $table->string('RAM');
            $table->string('Storage');
            $table->string('Image');
            $table->integer('wid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
