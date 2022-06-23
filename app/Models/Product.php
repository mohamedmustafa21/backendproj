<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'make',
        'model',
        'stock_number',
        'price',
        'state',
    ];


    public function request_product()
    {
        return $this->belongsTo(RequestsProduct::class);
        
    }

}
