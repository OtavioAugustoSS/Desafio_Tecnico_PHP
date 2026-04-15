<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = ['nome'];

    public function cartorios()
    {
        return $this->hasMany(Cartorio::class);
    }
}
