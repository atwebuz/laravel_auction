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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('brand_id')->constrained();
            $table->string('name');
            $table->string('paragraph');
            $table->double('price');
            $table->double('rating')->nullable();
            $table->bigInteger('reads')->unsigned()->default(1)->index();
            $table->date('date_of_year');
            $table->float('millage');
            $table->string('transmission');
            $table->string('color');
            $table->string('oil_type');
            $table->string('condition')->nullable();
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
