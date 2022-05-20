<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['courses'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
}
