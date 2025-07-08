<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Freelancing extends Model
{
    protected $table = 'freelancing';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'location',
        'price',
        'paymentMethod',
        'duration',
        'course',
    ];
}
