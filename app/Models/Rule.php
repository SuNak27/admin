<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['permissions'];

    public function permissions()
    {
        return $this->belongsTo(Permission::class);
    }
}
