<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_addres extends Model
{
    use HasFactory;
    protected $table = 'orders_address';
    protected $fillable = ['strret_name','city','address','building','floor','mobile','status'];

    // public function order_detail(){

    //     return $this->belongsTo('App\Models\Business\Order','order_id','order_id');

    // }
}
