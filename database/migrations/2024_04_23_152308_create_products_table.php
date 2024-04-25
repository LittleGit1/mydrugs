<?php

use App\Models\ProductCategory;
use App\Models\ProductCategoryClass;
use App\Models\ProductCategorySubclass;
use App\Models\ProductSubcategory;
use App\Models\User;
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
            $table->timestamps();
            $table->string('name', 255);
            $table->text('description');
            $table->bigInteger('price');
            $table->boolean('active');
            $table->bigInteger('stock_quantity');
            $table->foreignIdFor(User::class, 'seller_id');
            $table->foreignIdFor(ProductCategory::class, 'product_category_id');
            $table->foreignIdFor(ProductSubcategory::class, 'product_subcategory_id');
            //Meta Data
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
