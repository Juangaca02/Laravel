<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'descripcion',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'bets')->withPivot('id', 'description_bet', 'amount_bet');
    }
}
