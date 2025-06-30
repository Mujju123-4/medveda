<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    use HasFactory;
    protected $table = "coupon";
    protected $fillable = [
        "title",
        "code",
        "image",
        "min_amount",
        "from_date",
        "to_date",
        "discount_type", //means in ₹ or %
        "discount_price",
        "use_limit",  //usage limit
        "description",
        "is_active"
    ];
}
