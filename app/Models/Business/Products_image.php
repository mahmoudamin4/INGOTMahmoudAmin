<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_image extends Model
{
    use HasFactory;
    protected $table='products_images';
    protected $fillable = ['product_id','product_images'];
}
