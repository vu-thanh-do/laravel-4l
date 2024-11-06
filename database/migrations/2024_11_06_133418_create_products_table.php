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
    $table->string('name'); // Tên của sản phẩm
    $table->json('images'); // Mảng ảnh của sản phẩm
    $table->string('size'); // Kích cỡ sản phẩm
    $table->string('color'); // Màu sắc sản phẩm
    $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); // Khoá ngoại tham chiếu đến bảng categories
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
