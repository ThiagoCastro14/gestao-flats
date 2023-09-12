<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Componentes extends Model
{
    use HasFactory;

    public function formatacaoMascaraDinheiroDecimal($valorFormatar)
    {
        $tamanho = strlen($valorFormatar);
        $dados = str_replace(',', '.', $valorFormatar);
        if($tamanho <= 6){
            $dados = str_replace(',', '.', $valorFormatar);
        } else {
            if($tamanho >= 8 && $tamanho <= 10){
                $trocaVirgulaPorPonto = str_replace(',', '.', $valorFormatar);
                $separaPorIndice = explode('.', $trocaVirgulaPorPonto);
                $dados = $separaPorIndice[0] . $separaPorIndice[1];
            }
        }

        return $dados;

    }
}
