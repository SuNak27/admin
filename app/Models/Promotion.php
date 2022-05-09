<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['types'];

    public function types()
    {
        return $this->belongsTo(Type::class);
    }
}
