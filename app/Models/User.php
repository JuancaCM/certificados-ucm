<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function roles()
    {
        return $this->belongsTo(Role::class);
    }
}
