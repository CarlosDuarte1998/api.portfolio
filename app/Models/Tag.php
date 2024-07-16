<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image'];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_tag');
    }

    public function workExperiences()
    {
        return $this->belongsToMany(WorkExperience::class, 'work_experience_tag');
    }

    
}
