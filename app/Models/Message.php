<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_id',
        'from',
        'message',
        'received_at',
    ];


    public function number()
    {
        return $this->belongsTo(Number::class);
    }
}
