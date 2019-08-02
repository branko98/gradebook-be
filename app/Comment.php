<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gradebook;
use App\Professor;

class Comment extends Model
{
    public function gradebooks(){
        return $this->belongsTo(Gradebook::class, 'gradebook_id');
    }
    public function professor(){
        return $this->belongsTo(Professor::class, 'professor_id');
    }
}
