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
      Schema::table('products', function(Blueprint $table)
      {
            $table->renameColumn('дата', 'date');
            $table->renameColumn('артикул', 'article');
            $table->renameColumn('название', 'name');
            $table->renameColumn('бренд', 'brend');
            $table->renameColumn('категория', 'catigories');
            $table->renameColumn('фото1', 'photo1');
            $table->renameColumn('фото2', 'photo2');
            $table->renameColumn('фото3', 'photo3');
            $table->renameColumn('видео1', 'video1');
            $table->renameColumn('видео2', 'video2');
            $table->renameColumn('видео3', 'video3');
            $table->renameColumn('описание', 'description');
            $table->renameColumn('цена РРЦ', 'price_rrc');
            $table->renameColumn('фасовка', 'packaging');
            $table->renameColumn('вес', 'weight');
            $table->renameColumn('длина', 'length');
            $table->renameColumn('ширина', 'width');
            $table->renameColumn('высота', 'height');
            $table->renameColumn('срок годности', 'expiration_date');
            $table->renameColumn('условия хранения', 'storage_conditions');
            $table->renameColumn('штрихкод', 'barcode');
            $table->renameColumn('ТНВЭД', 'hs_code');
      });
    }

    /**
     * Reverse the migrations.
     */
    
    public function down(): void
    {
        //
    }
};
