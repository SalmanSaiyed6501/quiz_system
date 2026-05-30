<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    protected $table = 'quiz';

    public function category(){
        return $this->belongsTo(category::class);
    }
}
