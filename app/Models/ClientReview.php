<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ClientReview extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'client_review';
    
    protected $fillable = [
        'name',
        'designation',
        'description',
    ];

}
