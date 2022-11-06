<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_color extends Model
{
    use HasFactory;
    protected $table='products_color';
    protected $fillable = ['product_id','color'];
}
