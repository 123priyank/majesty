<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';
    protected $fillable = [
        'full_name',
        'enagic_email',
        'password',
        'contact_number',
        'alternative_contact_number',
        'birth_date',
        'blood_group',
        'date_of_birth_spouse',
        'anniversary_date',
        'home_address',
        'district',
        'country',
        'state',
        'city',
        'status',
        'enagic_id_no',
        'enagic_sponser_name',
        'enagic_sponser_id',
        'device_mode',
        'joining_date',
        'role',
        'profile_pic'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
