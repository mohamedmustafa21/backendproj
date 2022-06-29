<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'type',
        'city',
        'state',
        'phone_1',
        'phone_2',
    ];

    use HasFactory;
    public function requests()
    {
        return $this->hasMany(Request::class);
        
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
        
    }


}
