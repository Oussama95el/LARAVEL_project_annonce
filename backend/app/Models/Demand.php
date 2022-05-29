<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    use HasFactory;

    public function userDemand()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $fillable = [
        'title',
        'description',
        'type',
        'picture',
        'user_id',
    ];
}
