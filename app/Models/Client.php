<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'last_name',
        'amount',
        'email',
        'phone',
        'phone2',
        'cpf',
        'nascimento',
        'sexo',
        'cep',
        'endereco',
        'cidade',
        'estado'
    ];

    public function transactions() : HasMany
    {
        return $this -> hasMany(User::class, 'id_client');
    }
}
