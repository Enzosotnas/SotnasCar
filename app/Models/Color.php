<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Color extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function carros()
    {
        return $this->hasMany(Carro::class);
    }
}