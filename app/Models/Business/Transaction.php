<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table='users_transactions';
    protected $fillable = ['userID','recipient_id','amount','note','category','id'];
}
