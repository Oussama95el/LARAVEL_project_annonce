<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public function userOffer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    protected $fillable = [
        'title',
        'description',
        'type',
        'picture',
        'price',
        'user_id',
    ];
}
