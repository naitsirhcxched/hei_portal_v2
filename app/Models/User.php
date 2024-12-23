<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    use Notifiable;

   
    protected $table = 'tbl_heis_acct';

    
    protected $fillable = [
        'hei_username', 
        'hei_password',  
        'hei_name',      
    ];

   
    protected $hidden = [
        'hei_password',  
    ];

    
}
