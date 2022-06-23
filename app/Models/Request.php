<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{

    protected $fillable = [
        'customer_id',
        'oncharge_user',
        'date_of_call',
        'date_for_call_back',
        'status',
    ];

    use HasFactory;
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
        
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
        
    }
    public function user()
    {
        return $this->belongsTo(User::class);
        
    }
    public function request_product()
    {
        return $this->belongsTo(RequestsProduct::class);
        
    }

}

