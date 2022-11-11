<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }

    public function course_name()
    {
        return $this->belongsTo(CourseName::class);
    }

    public function course_teacher()
    {
        return $this->belongsTo(CourseTeacher::class);
    }

    public function target_audience()
    {
        return $this->belongsTo(TargetAudience::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function modality()
    {
        return $this->belongsTo(Modality::class);
    }
}
