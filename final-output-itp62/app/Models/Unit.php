<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
    'name',
    'description',
    'mainpic',
    'video',
    'details',
    'location_image',
    'location_name',
    'guests',
    'beds',
    'slug',
    'image2',
    'image3'
];      
}
