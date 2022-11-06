<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_detail extends Model
{
    use HasFactory;
    protected $table='products_details';
    protected $fillable = ['name'];
}
