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
            $table->string('name',255)->unique();
            $table->string('slug',255);
            $table->double('price');
            $table->string('image',255);
            $table->longText('description');
            $table->text('sumary')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->string('color', 255);
            $table->string('size', 255);
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
