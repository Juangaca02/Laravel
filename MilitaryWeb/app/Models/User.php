<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
    // implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'DNI',
        'phone',
        'birthdate',
        'sex',
        'email',
        'password',
        'town',
        'province',
        'entry_army_date',
        'profile_photo_path',
        'verified',
        'range_id',
        'rol_id',
        'army_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * 
     */
    public function missions()
    {
        return $this->belongsToMany(Mission::class, 'user_missions');
    }

    /**
     * 
     */
    public function mission()
    {
        return $this->hasMany(Mission::class, 'user_id');
    }

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
    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    /**
     * 
     */
    public function range()
    {
        return $this->belongsTo(Range::class);
    }
}
