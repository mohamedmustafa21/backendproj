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


    public function product()
    {
        return $this->belongsTo(Product::class);
        
    }
    public function request()
    {
        return $this->belongsTo(Request::class);
        
    }


}
