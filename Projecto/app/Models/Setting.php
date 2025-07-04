<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;

    public function users()
    {
       return $this->belongsTo(User::class,'id_user');        
    }

    public function rolers()
    {
        return $this->belongsTo(Roles::class,'id_role');
    }

}


