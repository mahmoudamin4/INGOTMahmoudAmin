<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders_details';
    protected $fillable = ['order_id','business_id','userID','status','payment_method','product_id','Qty','single_price','total_price','color','message','type'];


    public function All_Order_bus()
    {
        return $this->hasMany('App\Models\Business\Order_addres','order_id','order_id');
    }
}
