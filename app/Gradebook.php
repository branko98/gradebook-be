<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\Professor;

class Gradebook extends Model
{
    public function students(){
        return $this->hasMany(Student::class, 'gradebook_id');
    }

    public function professor(){
        return $this->belongsTo(Professor::class, 'professor_id');
    }
}
