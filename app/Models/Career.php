<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
