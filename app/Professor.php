<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gradebook;

class Professor extends Model
{
    public function gradebooks(){
        return $this->hasOne(Gradebook::class);
    }
}
