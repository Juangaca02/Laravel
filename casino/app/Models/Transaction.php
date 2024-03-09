<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'transaction_type',
        'balance',
    ];

    public function user_idBT()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
