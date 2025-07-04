<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
   
     
    use hasFactory;
   
    public function inspectors(){
        return $this->hasOne(Inspector::class, 'id_class');
    }
    public function settings(){
        return $this->hasOne(Setting::class, 'user_id');
    }
    public function payments(){
        return $this->hasMany(Payment::class, 'user_id');
    }
    public function cars(){
        return $this->hasMany(Car::class, 'user_id');
    }
    public function notifications(){
        return $this->hasMany(Notification::class, 'user_id');
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

}
