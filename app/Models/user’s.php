<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user’s extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'full_name',
        'user_name',
        'email',
        'password',
        'confirm_password',
        'birthdate',
        'phone',
        'address',
        'user_image'
    ];
}
