<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_id',
        'comment',
    ];


    public function request()
    {
        return $this->belongsTo(Request::class);
        
    }

}
