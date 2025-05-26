<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class email_verify extends Model
{
    protected $fillable = ['token', 'user_id'];
}
