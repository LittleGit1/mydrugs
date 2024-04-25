<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Product Category Subclass refer to a subset of drugs that fall into one ProductCategoryClass i.e.
 * Cocaine >> Stimulant
 * Nicotine >> Stimulant
 */
class ProductSubcategory extends Model
{
    use HasFactory;

    public function parentCategory() {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
