<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;
    protected $fillable = [
        'address',
        'description',
        'type',
        'price',
        'type',
        'number_beds',
        'image',
    ];
}
