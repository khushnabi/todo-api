<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function projects()
    {
        return $this->belongsTo(Project::class);
    }

    public function lables()
    {
        return $this->hasMany(Lable::class);
    }
}
