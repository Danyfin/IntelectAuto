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
            $table->date('date');
            $table->string('article');
            $table->string('name');
            $table->string('brend');
            $table->string('catigories')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('video1')->nullable();
            $table->string('video2')->nullable();
            $table->string('video3')->nullable();
            $table->text('description');
            $table->float('price_rrc');
            $table->string('packaging');
            $table->float('weight');
            $table->float('length');
            $table->float('width');
            $table->float('height');
            $table->string('expiration_date');
            $table->string('storage_conditions');
            $table->bigInteger('barcode');
            $table->bigInteger('hs_code');


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
