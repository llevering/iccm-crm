<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $fillable = [
        'name',
        'address',
        'town',
        'mail_address',
        'phone_number'
    ];
    // $guarded is the opposite of $fillable, sometimes more convenient

    public function donations()
    {
        return $this->hasMany('App\\Donation');
    }
}
