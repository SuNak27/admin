<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['credits'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function types()
    {
        return $this->hasMany(Type::class);
    }

    public function credits()
    {
        return $this->belongsTo(Credit::class);
    }
}
