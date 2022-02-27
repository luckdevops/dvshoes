<?php

use Illuminate\Database\Seeder;
use App\Models\TipoProduto;
use Carbon\Carbon;

class TipoProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nome' => 'Mocassim', 'created_at' => Carbon::now()],
            ['nome' => 'Mule', 'created_at' => Carbon::now()],
            ['nome' => 'Sandália', 'created_at' => Carbon::now()],
            ['nome' => 'Sapatilha', 'created_at' => Carbon::now()],
            ['nome' => 'Scarpin', 'created_at' => Carbon::now()],
            ['nome' => 'Tênis', 'created_at' => Carbon::now()],
        ];

        TipoProduto::insert($data); // Eloquent approach
    }
}
