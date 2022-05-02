<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['class_room'];

    public function class_room()
    {
        return $this->belongsTo(ClassRoom::class);
    }
}
