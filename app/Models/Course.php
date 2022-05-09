<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['classRoom'];

    public function class_rooms()
    {
        return $this->belongsTo(ClassRoom::class);
    }
}
