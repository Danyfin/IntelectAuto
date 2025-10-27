<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('article')->unique();
            $table->string('name');
            $table->string('brend');
            $table->string('catigories');
            $table->string('photol')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('videol')->nullable();
            $table->string('video2')->nullable();
            $table->string('video3')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('RRC', 10, 2)->nullable();
            $table->string('packaging')->nullable();
            $table->decimal('weight', 8, 2)->nullable();
            $table->decimal('length', 8, 2)->nullable();
            $table->decimal('width', 8, 2)->nullable();
            $table->decimal('height', 8, 2)->nullable();
            $table->date('expiration')->nullable();
            $table->text('storage')->nullable();
            $table->string('conbarcode')->nullable()->unique();
            $table->string('CNOFEA')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};