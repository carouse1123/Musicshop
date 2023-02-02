<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product_categories extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function product() {
        return $this->hasMany(product_categoeies::class,'product_id');
    }
}