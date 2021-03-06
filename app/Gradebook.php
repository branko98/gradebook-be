<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\Professor;
use App\Comment;

class Gradebook extends Model
{
    const STORE_RULES = [
        'class' => 'required|min:2',
    ];
    protected $fillable = [
        'class',
        'professor_id',
    ];

    public function students(){
        return $this->hasMany(Student::class, 'gradebook_id');
    }

    public function professor(){
        return $this->belongsTo(Professor::class, 'professor_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
