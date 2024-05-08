<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    /**
     * 
     */
    public function army()
    {
        return $this->belongsTo(Army::class);
    }

    /**
     * 
     */
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    /**
     * 
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_missions');
    }
}
