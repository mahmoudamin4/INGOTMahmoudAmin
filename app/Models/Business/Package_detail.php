<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package_detail extends Model
{
    use HasFactory;
    protected $table='package_details';
    protected $fillable = ['name','description','price','business_id','state','package_profile_img','name_er','description_er'];
}
