<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Product Category refers to a family of drugs i.e. Stimulants, Opioids etc.
 */
class ProductCategory extends Model
{
    use HasFactory;

    public function subcategories(){
        return $this->hasMany(ProductSubcategory::class);
    }
}
