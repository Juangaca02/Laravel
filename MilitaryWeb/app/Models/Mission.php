<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'date',
        'status',
        'type',
        'priority',
        'objective',
        'action',
        'result',
        'photo',
        'army_id',
        'destination_id',
        'user_id',
    ];


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
