<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public static function run(): void
    {
        for ($c = 0; $c < 5; $c++)
        {
            DB::table('users')->insert([
                'nome' => Str::random(10),
                'sobrenome' => Str::random(10).'@gmail.com',
                'cpf' => Str::random(11),
                'usuario' => Str::random(10),
                'sexo' => 'feminino',
                'id_perfil' => 1,
                'senha' => Hash::make('password'),
                'email' => Str::random(10),
                'cep' => Str::random(8),
                'endereco' => Str::random(10),
                'cidade' => Str::random(10),
                'estado' => Str::random(10)
            ]);
    
    
            DB::table('profiles')->insert([
                'nome' => Str::random(10),
                'usuario' => 1,
                'produto' => 1,
                'venda' => 1
            ]);
        }
    }
}
