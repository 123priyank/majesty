<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rant extends Model
{
    use HasFactory;

    protected $table='rants';
    protected $fillable=['user_id','level','status','level_user_id'];
}
