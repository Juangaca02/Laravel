<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bet extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'game_id',
        'description_bet',
        'amount_bet',
    ];

    public function currentOwner()
    {
        return $this->belongsTo(User::class, 'current_owner_id');
    }

    public function sponsors()
    {
        return $this->belongsToMany(User::class, 'sponsors')->withPivot("status");
    }

}
