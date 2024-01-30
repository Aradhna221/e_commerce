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
        Schema::create('recproducts', function (Blueprint $table) {
            $table->id();
            $table->string("Productid");
            $table->string('Name');
            $table->string('Quantity');
            $table->string('Price');
            $table->string('Type');
            $table->string('Details');
            $table->string('Image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recproducts');
    }
};
