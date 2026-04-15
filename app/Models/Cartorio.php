<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cartorio extends Model
{
    protected $fillable = [
        'nome',
        'cnpj',
        'nome_tabeliao',
        'ativo',
        'municipio_id'
    ];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }
}
