<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cart extends Model
{
    use HasFactory;
    use SoftDeletes;
    function order_detail(){
        return $this->hasMany(order_detail::class);
    }
}