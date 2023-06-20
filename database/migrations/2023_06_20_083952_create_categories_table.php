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
        Schema::create('categories', function (Blueprint $table) {
            // name, image, description, meta_description
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            $table->string('image');
            $table->text('description');
            $table->text('meta_description');
            $table->enum('status',['active','not_active'])->default('active');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
