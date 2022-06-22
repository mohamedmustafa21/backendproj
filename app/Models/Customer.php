<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
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
