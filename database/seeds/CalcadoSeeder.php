<?php

use Illuminate\Database\Seeder;
use App\Models\Calcado;
use Carbon\Carbon;

class CalcadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['codigo' => rand(1000, 9999), 'id_produto' => 1, 'id_tipo_produto' => 1, 'id_cor' => 1, 'id_numeracao' => 1, 'preco_custo' => 49.9, 'preco_venda_antigo' => 89.9, 'preco_venda_novo' =>  89.9, 'created_at' => Carbon::now()],
            ['codigo' => rand(1000, 9999), 'id_produto' => 1, 'id_tipo_produto' => 1, 'id_cor' => 1, 'id_numeracao' => 1, 'preco_custo' => 49.9, 'preco_venda_antigo' => 89.9, 'preco_venda_novo' =>  89.9, 'created_at' => Carbon::now()],
            ['codigo' => rand(1000, 9999), 'id_produto' => 1, 'id_tipo_produto' => 1, 'id_cor' => 1, 'id_numeracao' => 1, 'preco_custo' => 49.9, 'preco_venda_antigo' => 89.9, 'preco_venda_novo' =>  89.9, 'created_at' => Carbon::now()],
            ['codigo' => rand(1000, 9999), 'id_produto' => 1, 'id_tipo_produto' => 1, 'id_cor' => 1, 'id_numeracao' => 1, 'preco_custo' => 49.9, 'preco_venda_antigo' => 89.9, 'preco_venda_novo' =>  89.9, 'created_at' => Carbon::now()],
            ['codigo' => rand(1000, 9999), 'id_produto' => 1, 'id_tipo_produto' => 1, 'id_cor' => 1, 'id_numeracao' => 1, 'preco_custo' => 49.9, 'preco_venda_antigo' => 89.9, 'preco_venda_novo' =>  89.9, 'created_at' => Carbon::now()],
            ['codigo' => rand(1000, 9999), 'id_produto' => 1, 'id_tipo_produto' => 1, 'id_cor' => 1, 'id_numeracao' => 1, 'preco_custo' => 49.9, 'preco_venda_antigo' => 89.9, 'preco_venda_novo' =>  89.9, 'created_at' => Carbon::now()],
            ['codigo' => rand(1000, 9999), 'id_produto' => 1, 'id_tipo_produto' => 1, 'id_cor' => 1, 'id_numeracao' => 1, 'preco_custo' => 49.9, 'preco_venda_antigo' => 89.9, 'preco_venda_novo' =>  89.9, 'created_at' => Carbon::now()],
            ['codigo' => rand(1000, 9999), 'id_produto' => 1, 'id_tipo_produto' => 1, 'id_cor' => 1, 'id_numeracao' => 1, 'preco_custo' => 49.9, 'preco_venda_antigo' => 89.9, 'preco_venda_novo' =>  89.9, 'created_at' => Carbon::now()],
            ['codigo' => rand(1000, 9999), 'id_produto' => 1, 'id_tipo_produto' => 1, 'id_cor' => 1, 'id_numeracao' => 1, 'preco_custo' => 49.9, 'preco_venda_antigo' => 89.9, 'preco_venda_novo' =>  89.9, 'created_at' => Carbon::now()],
            ['codigo' => rand(1000, 9999), 'id_produto' => 1, 'id_tipo_produto' => 1, 'id_cor' => 1, 'id_numeracao' => 1, 'preco_custo' => 49.9, 'preco_venda_antigo' => 89.9, 'preco_venda_novo' =>  89.9, 'created_at' => Carbon::now()],
            ['codigo' => rand(1000, 9999), 'id_produto' => 1, 'id_tipo_produto' => 1, 'id_cor' => 1, 'id_numeracao' => 1, 'preco_custo' => 49.9, 'preco_venda_antigo' => 89.9, 'preco_venda_novo' =>  89.9, 'created_at' => Carbon::now()],
            ['codigo' => rand(1000, 9999), 'id_produto' => 1, 'id_tipo_produto' => 1, 'id_cor' => 1, 'id_numeracao' => 1, 'preco_custo' => 49.9, 'preco_venda_antigo' => 89.9, 'preco_venda_novo' =>  89.9, 'created_at' => Carbon::now()],
            ['codigo' => rand(1000, 9999), 'id_produto' => 1, 'id_tipo_produto' => 1, 'id_cor' => 1, 'id_numeracao' => 1, 'preco_custo' => 49.9, 'preco_venda_antigo' => 89.9, 'preco_venda_novo' =>  89.9, 'created_at' => Carbon::now()],
        ];

        Calcado::insert($data); // Eloquent approach
    }
}
