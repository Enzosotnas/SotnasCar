<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carro extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca_id',
        'modelo_id',
        'color_id',
        'ano',
        'quilometragem',
        'valor',
        'detalhes',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function fotos()
    {
        return $this->hasMany(FotoCarro::class);
    }

    public function fotoPrincipal()
    {
        return $this->hasOne(FotoCarro::class)->where('principal', 1);
    }
}