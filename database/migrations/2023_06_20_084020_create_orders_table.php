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
//         user_id, product_id, start_time, end_time, time, qty, price, total_price,
//   status[accepted, preparing, canceled]

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('product_id');
            $table->date('start_time');
            $table->date('end_time');
            $table->date('time');
            $table->integer('qty');
            $table->float('price');
            $table->float('total_price');
            $table->enum('status',['accepted','preparing','canceled']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
