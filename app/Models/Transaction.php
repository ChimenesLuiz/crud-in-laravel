<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'id_user',
        'id_client',
        'id_product',
        'amount',
        'total'
    ];
    use HasFactory;
}
