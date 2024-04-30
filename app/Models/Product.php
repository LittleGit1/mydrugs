<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function seller() {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function category() {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function subcategory() {
        return $this->belongsTo(ProductSubcategory::class, 'product_subcategory_id');
    }

    public function reviews(){
        return $this->hasMany(ProductReview::class);
    }
}
