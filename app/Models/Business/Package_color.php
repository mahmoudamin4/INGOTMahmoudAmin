<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package_color extends Model
{
    use HasFactory;
    protected $table='package_color';
    protected $fillable = ['package_id','color'];
}
