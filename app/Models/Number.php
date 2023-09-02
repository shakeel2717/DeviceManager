<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'number',
        'status',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class)->latest();
    }
}
