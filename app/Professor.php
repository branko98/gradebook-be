<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gradebook;
use App\Student;

class Professor extends Model
{
    public function gradebooks(){
        return $this->hasOne(Gradebook::class);
    }
}
