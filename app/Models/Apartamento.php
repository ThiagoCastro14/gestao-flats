<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'proprietario',
        'endereco',
        'num_ap',
        'telefone',
    ];

    public function getApartamentosPesquisarIndex(string $search = '')
    {
        $apartamento = $this->where(function( $query) use ($search){
            if($search){
                $query->where('descricao', $search);
                $query->orWhere('descricao', 'LIKE', "%{$search}%");
                $query->orWhere('num_ap', 'LIKE', "%{$search}%");
            }
        })->get();

        return $apartamento;
    }
}
