<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['permissions', 'users'];

    public function permissions()
    {
        return $this->belongsTo(Permission::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
