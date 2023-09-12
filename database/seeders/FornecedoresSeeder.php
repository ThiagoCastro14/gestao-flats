<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FornecedoresSeeder extends Seeder
{
    
    public function run(): void
    {
        Fornecedor::create([
            'nome' => 'Thiago',
            'email'=>'thiago@',
            'endereco'=>'SOF',
            'telefone'=>'61-9999-8888',
            ]
        );
    }
}
