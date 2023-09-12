<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    
    public function run(): void
    {
        Produto::create([
            'nome' => 'Pano',
            'valor' => '9.99',
            'qtd_produto' => '1'
            ]
        );
    }
}
