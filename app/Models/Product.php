<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Supplier;


class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'value',
        'amount',
        'id_supplier'
    ];

    public function transactions() : HasMany
    {
        return $this -> hasMany(User::class, 'id_product');
    }
}
