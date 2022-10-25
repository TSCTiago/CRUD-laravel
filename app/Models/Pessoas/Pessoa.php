<?php

namespace App\Models\Pessoas;

use App\Models\Cidade;
use App\Models\Estado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pessoas';
    protected $fillable = [
        'name',
        'email',
        'telefone',
        'cpf',
        'estado_id',
        'cidade_id'
    ];


    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }

    public function cidade()
    {
        return $this->belongsTo(Cidade::class, 'cidade_id');
    }
}
