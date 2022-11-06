<?php

namespace App\Models\Staff;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store_categorie extends Model
{
    use HasFactory;
    protected $table='store_categories';
    protected $fillable = ['CategoryID','Category_Name','Category_banner'];
}
