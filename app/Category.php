<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id','categoryName','description','picture'
    ];

    public function products()
    {
        return $this->hasMany(Product::class,'category_id');
    }
}
