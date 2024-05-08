<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Army extends Model
{
    use HasFactory;
    /**
     * 
     */
    public function missions()
    {
        return $this->hasMany(Mission::class);
    }

    /**
     * 
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
