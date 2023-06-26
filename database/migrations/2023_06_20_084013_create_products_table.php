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
//         vendor_id, name, image[], description, meta_description, price, sale_price, qty, note
//          ,status[accepted, preparing, canceled]
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id');
            $table->string('name');
            $table->string('image');
            $table->text('description');
            $table->string('meta_description');
            $table->float('price');
            $table->float('sale_price')->nullable();
            $table->integer('qty')->nullable();
            // $table->text('note');
            $table->softDeletes();
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
