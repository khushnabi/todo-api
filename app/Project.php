<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $guarded = ['id'];

    public static function findBySlug($slug)
    {
        return Project::where('slug', $slug)->first();
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
