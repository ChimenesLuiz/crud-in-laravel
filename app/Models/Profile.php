<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'usuario',
        'cliente',
        'perfil',
        'produto',
        'venda'
    ];

    public function users() : HasMany
    {
        return $this -> hasMany(User::class, 'id_profile');
    }
}
