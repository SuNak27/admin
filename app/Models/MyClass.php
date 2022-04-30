<?php

namespace App\Models;

use App\Models\ClassRoom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MyClass extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['class_room'];

    public function class_room()
    {
        return $this->belongsTo(ClassRoom::class);
    }
}
