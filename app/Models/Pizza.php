<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $casts = [       # $casts type ra be jeyson ya araye tabdil mikone #
        'toppings' => 'array'
    ];
}
