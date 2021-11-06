<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AboutUs extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'aboutus';
    
    protected $fillable = [
        'title',
        'about_slug',
        'description',
        'images',
        'status',
    ];

}
