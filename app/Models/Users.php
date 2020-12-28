<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Users extends Model
{
    protected $table = 'users';
    use HasFactory;


    public function Phone()
    {
        return $this->hasOne('App\Models\Phone');
    }

    public function fetchPhoneUserById($id)
    {
        $phone = User::find($id)->phone;
        return $phone;
    }
}
