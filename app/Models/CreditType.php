<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['credits'];

    public function credits()
    {
        return $this->belongsTo(Credit::class);
    }
}
