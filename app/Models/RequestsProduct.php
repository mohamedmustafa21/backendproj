<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestsProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_id',
        'product_id',
    ];


    public function products()
    {
        return $this->hasMany(Product::class);
        
    }
    public function requests()
    {
        return $this->hasMany(Request::class);
        
    }


}
