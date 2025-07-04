<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    public function settings()
    {
        return $this->hasMany(Settings::class, 'id_roles');
    }
}
