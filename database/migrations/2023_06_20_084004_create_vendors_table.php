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
//         user_id, category_id, name_shop, image_shop, description_shop, meta_description_shop,
//   status_shop[accepted, canceled, pending] , identity, verification

        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('category_id')->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('meta_description')->nullable();
            $table->enum('status',['accepted','canceled','pending'])->default('pending');
            $table->string('identity_image')->nullable();
            $table->enum('verification',['yes','no'])->default('no');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
