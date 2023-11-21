<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Floats;
use Ramsey\Uuid\Type\Integer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public static function run(): void
    {
            //USERS
            DB::table('users')->insert([
                'name' => Str::random(10),
                'last_name' => Str::random(10),
                'id_profile' => rand(1, 3),
                'email' => Str::random(10).'@email.com',
                'password' => Hash::make('password')
            ]);

            //CLIENTS
            DB::table('clients')->insert([
                'name' => Str::random(10),
                'last_name' => Str::random(10),
                'phone' => str_pad(rand(0, 99999999999), 11, '0', STR_PAD_LEFT),
                'cpf' => str_pad(rand(0, 99999999999), 11, '0', STR_PAD_LEFT),
                'sexo' => 'apache'
            ]);
            //SUPPLIERS
            DB::table('suppliers')->insert([
                'name' => Str::random(10),
                'cnpj' => str_pad(rand(0, 99999999999), 14, '0', STR_PAD_LEFT),
            ]);

            //PRODUCTS
            DB::table('products')->insert([
                'name' => Str::random(10),
                'value' => rand(100, 1000),
                'ammount' => rand(1, 50),
                'id_supplier' => rand(1, 3)
            ]);
    }
}
