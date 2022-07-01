<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'category_users');
    }
}