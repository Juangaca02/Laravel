<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'country_id',
    ];

    /**
     * 
     */
    public function missions()
    {
        return $this->hasMany(Mission::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
