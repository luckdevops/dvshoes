<?php

use Illuminate\Database\Seeder;
use App\Models\Produto;
use Carbon\Carbon;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nome' => 'Scarpin', 'descricao' => 'Salto 5cm. Em couro.', 'created_at' => Carbon::now()],
            ['nome' => 'Sandália', 'descricao' => 'Rasteira. Em couro', 'created_at' => Carbon::now()],
            ['nome' => 'Sandália', 'descricao' => 'Salto quadrado 7cm. Em couro.', 'created_at' => Carbon::now()],
            ['nome' => 'Mule', 'descricao' => 'Em couro.', 'created_at' => Carbon::now()],
            ['nome' => 'Tênis', 'descricao' => 'Confortável. Em couro.', 'created_at' => Carbon::now()],
            ['nome' => 'Mocassim', 'descricao' => 'Em couro.'], 'created_at' => Carbon::now(),
            ['nome' => 'Sandália', 'descricao' => 'De tiras.', 'created_at' => Carbon::now()],
            ['nome' => 'Sapatilha', 'descricao' => 'Onça.', 'created_at' => Carbon::now()],
            ['nome' => 'Sandália', 'descricao' => 'Salto fino. Em couro.', 'created_at' => Carbon::now()],
            ['nome' => 'Scarpin', 'descricao' => 'Em couro.', 'created_at' => Carbon::now()],
            ['nome' => 'Mule', 'descricao' => 'Gelo.', 'created_at' => Carbon::now()],
            ['nome' => 'Mule', 'descricao' => 'Em couro.', 'created_at' => Carbon::now()],
        ];

        Produto::insert($data); // Eloquent approach
    }
}
