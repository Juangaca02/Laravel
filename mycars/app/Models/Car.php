<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'matricula',
        'marca',
        'modelo',
        'anio',
        'fecha_ultima_revision',
        'foto',
        'precio',
        'user_id',
    ];

    public function propietario()
    {
        return $this->belongsTo(User::class,'user_id');
    }


}
