<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    public function rules()
    {
        return $this->hasMany(Rule::class);
    }
}
