<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FotoCarro extends Model
{
    use HasFactory;

    protected $table = 'foto_carros';

    protected $fillable = [
        'carro_id',
        'url',
        'principal',
        'ordem',
    ];

    public function carro()
    {
        return $this->belongsTo(Carro::class, 'carro_id');
    }
}