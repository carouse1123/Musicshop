<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['product_name', 'product_price', 'product_stock', 'product_detail', 'product_cost', 'promotion_discount', 'promotion_start', 'promotion_end', 'category_id'];
    public function product_categories() {
        return $this->belongsTo(product_categories::class);
    }
    public function product_image() {
        return $this->hasMany(product_image::class);
    }
    function order_detail(){
        return $this->hasMany(order_detail::class);
    }
    
}
