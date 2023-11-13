<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'nome',
        'usuario',
        'perfil',
        'produto',
        'venda'
    ];
}
