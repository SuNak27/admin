<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['transactions', 'credits'];

    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }

    public function transactions()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function credits()
    {
        return $this->belongsTo(Credit::class);
    }
}
