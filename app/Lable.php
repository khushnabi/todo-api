<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lable extends Model
{
    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }
}
