<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }
}
