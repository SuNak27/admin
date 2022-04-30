<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function myclasses()
    {
        return $this->hasMany(MyClass::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
