<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'owner',
        'address',
        'ap_number',
        'phone',       
    ];

    public function getApartmentsPesquisarIndex(string $search = '')
    {
        $apartment = $this->where(function( $query) use ($search){
            if($search){
                $query->where('descricao', $search);
                $query->orWhere('descricao', 'LIKE', "%{$search}%");
                $query->orWhere('num_ap', 'LIKE', "%{$search}%");
            }
        })->get();

        return $apartment;
    }
}
