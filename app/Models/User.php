<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'Id';

    protected $fillable = [
        'Email', 'Username', 'Password', 'Image', 'Gender', 'Role'
    ];

    protected $hidden = [
        'Password', 'remember_token',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'User_id');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class, 'User_id');
    }
}
