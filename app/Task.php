<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'completed' => 'boolean',
        'completed_at' => 'date'
    ];

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }


    public function labels()
    {
        return $this->hasMany(Label::class);
    }
}
