<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'amount',
        'email',
        'phone',
        'phone2',
        'cpf',
        'sexo',
        'cep',
        'endereco',
        'cidade',
        'estado'
    ];
    use HasFactory;
}
