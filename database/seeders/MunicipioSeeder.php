<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipio;

class MunicipioSeeder extends Seeder
{
    public function run(): void
    {
        Municipio::create(['nome' => 'Brasília']);
    Municipio::create(['nome' => 'Luziânia']);
    Municipio::create(['nome' => 'Formosa']);
    Municipio::create(['nome' => 'Planaltina']);
    Municipio::create(['nome' => 'Valparaíso de Goiás']);
    Municipio::create(['nome' => 'Águas Lindas de Goiás']);
    Municipio::create(['nome' => 'Goiânia']);
    Municipio::create(['nome' => 'São Paulo']);
    Municipio::create(['nome' => 'Rio de Janeiro']);
    Municipio::create(['nome' => 'Belo Horizonte']);
    }
}
