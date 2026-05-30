<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function quizes(){
        return $this->hasMany(Quiz::class);
    }
}
