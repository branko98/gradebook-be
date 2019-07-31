<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gradebook;

class Student extends Model
{
    public function gradebook(){
        return $this->belongsTo(Gradebook::class);
    }
}
