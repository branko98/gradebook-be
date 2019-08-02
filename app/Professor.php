<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gradebook;
use App\Student;
use App\Comment;

class Professor extends Model
{
    const STORE_RULES = [
        'firstName' => 'required | min:2',
        'lastName' => 'required | min:2',
        'imgUrl' => 'required | ends_with: jpg, png, bmp',
    ];
    protected $fillable = [
        'firstName',
        'lastName',
        'imgUrl',

    ];

    public function gradebooks(){
        return $this->hasOne(Gradebook::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
