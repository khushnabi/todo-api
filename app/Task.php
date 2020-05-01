<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = ['id'];

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }


    public function labels()
    {
        return $this->hasMany(Label::class);
    }
}
