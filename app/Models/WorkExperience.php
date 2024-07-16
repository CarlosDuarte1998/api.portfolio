<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = ['company', 'role', 'description', 'start_date', 'end_date', 'image'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'work_experience_tag');
    }

    
}
