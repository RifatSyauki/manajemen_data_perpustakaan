<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;


    protected $fillable = [
        'username',
        'email',
        'is_admin',
        'password'
    ];
}
