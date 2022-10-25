<?php

namespace App\Models;

use App\Models\Pessoas\Pessoa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    protected $table = 'cidade';

    public function pessoas()
    {
        return $this->hasMany(Pessoa::class);
    }
}
