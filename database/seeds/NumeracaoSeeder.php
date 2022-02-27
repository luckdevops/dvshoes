<?php

use Illuminate\Database\Seeder;
use App\Models\Numeracao;
use Carbon\Carbon;

class NumeracaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['numero' => 34, 'created_at' => Carbon::now()],
            ['numero' => 35, 'created_at' => Carbon::now()],
            ['numero' => 36, 'created_at' => Carbon::now()],
            ['numero' => 37, 'created_at' => Carbon::now()],
            ['numero' => 38, 'created_at' => Carbon::now()],
            ['numero' => 39, 'created_at' => Carbon::now()],
            ['numero' => 40, 'created_at' => Carbon::now()]
        ];

        Numeracao::insert($data);
    }
}
