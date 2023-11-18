<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->integer('stock');
            $table->integer('weight');
            $table->enum('type', ['Anggur Meja (Table Grapes)', 'Anggur Hitam (Black Grapes)', 'Anggur Merah (Red Grapes)', 'Anggur Putih (White Grapes)', 'Anggur untuk Wine (Wine Grapes)', 'Anggur Kismis (Raisin Grapes)']);
            $table->string('image'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
