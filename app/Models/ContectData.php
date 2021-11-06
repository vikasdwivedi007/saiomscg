<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ContectData extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'contect_data';
    
    protected $fillable = [
        'name',
        'email',
        'subject',
        'mobile',
        'message',
        
    ];

}
