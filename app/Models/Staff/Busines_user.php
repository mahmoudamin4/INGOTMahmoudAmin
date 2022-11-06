<?php

namespace App\Models\Staff;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Busines_user extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='busines_users';
    protected $fillable = ['id ','Fname','Lname','mobile','email','password','profile_image'];
}
