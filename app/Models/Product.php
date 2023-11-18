<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Supplier;


class Product extends Model
{
    protected $fillable = [
        'name',
        'value',
        'amount',
        'id_supplier'
    ];

    use HasFactory;
}
