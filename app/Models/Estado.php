<?php

namespace App\Models;

use App\Models\Pessoas\Pessoa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $table = 'estado';

    protected $fillable = [
        'nome',
        'uf',
        'ibge',
        'pais',
        'ddd',
    ];

    public function pessoas()
    {
        return  $this->hasMany(Pessoa::class);
    }
}
