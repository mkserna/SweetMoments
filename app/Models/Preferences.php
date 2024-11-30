<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preferences extends Model
{
    protected $fillable = [
        'users_id',
        'products_id',
    ];
}
