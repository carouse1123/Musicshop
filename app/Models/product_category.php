<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product_category extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function product() {
        return $this->hasMany(products_category::class,'product_id');
    }
}
