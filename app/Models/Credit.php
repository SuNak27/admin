<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function credit_types()
    {
        return $this->hasMany(CreditType::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function types()
    {
        return $this->hasMany(Type::class);
    }
}
