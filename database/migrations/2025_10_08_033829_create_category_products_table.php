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
        Schema::create('category_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->json('image');
            $table->string('description');
            $table->json('description_point');
            $table->decimal('price', 8, 2);
            $table->integer('discount')->default(0);
            $table->string('height');
            $table->string('width');
            $table->string('depth');
            $table->foreignId('category_sub_id')->constrained('category_subs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_products');
    }
};
