<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
        // return $this->belongsToMany(User::class, 'profile_user');
    }

    public function profile_skills()
    {
        return $this->hasMany(ProfileSkill::class);
    }

    public function skills(){

        return $this->belongsToMany(Skill::class,'profile_skills');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
