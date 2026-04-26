<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
    'account_id',
    'unit_id',
    'check_in',
    'check_out',
    'first_name',
    'last_name',
    'email',
    'phone_number',
    'message',
];

public function unit()
{
    return $this->belongsTo(Unit::class);
}

}
