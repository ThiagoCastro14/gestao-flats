<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Componentes extends Model
{
    use HasFactory;

    public function formattingMoney($valueFormat)
    {
        $size = strlen($valueFormat);
        $data = str_replace(',', '.', $valueFormat);
        if($size <= 6){
            $data = str_replace(',', '.', $valueFormat);
        } else {
            if($size >= 8 && $size <= 10){
                $changeSignal = str_replace(',', '.', $valueFormat);
                $separete = explode('.', $changeSignal);
                $data = $separete[0] . $separete[1];
            }
        }

        return $data;

    }
}
