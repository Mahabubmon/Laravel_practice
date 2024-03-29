<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('model_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('des')->nullable();
            $table->float('price');
            $table->integer('quantity');
            $table->integer('status')->default('2')->comment("1 for active 2 for Inactive");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_products');
    }
};
