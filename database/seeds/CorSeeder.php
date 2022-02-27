<?php

use Illuminate\Database\Seeder;
use App\Models\Cor;
use Carbon\Carbon;

class CorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nome' => 'Vermelho', 'hexadecimal' => '#812033', 'created_at' => Carbon::now()],
            ['nome' => 'Ferrugem', 'hexadecimal' => '#B1463E', 'created_at' => Carbon::now()],
            ['nome' => 'Azul', 'hexadecimal' => '#4667AA', 'created_at' => Carbon::now()],
            ['nome' => 'Azul Claro', 'hexadecimal' => '#8AD5DB', 'created_at' => Carbon::now()],
            ['nome' => 'Verde Musgo', 'hexadecimal' => '#ADA78F', 'created_at' => Carbon::now()],
            ['nome' => 'Verde Claro', 'hexadecimal' => '#CFF393', 'created_at' => Carbon::now()],
            ['nome' => 'Laranja', 'hexadecimal' => '#FC583C', 'created_at' => Carbon::now()],
            ['nome' => 'Preto', 'hexadecimal' => '#242225', 'created_at' => Carbon::now()],
            ['nome' => 'Marrom', 'hexadecimal' => '#AF5A34', 'created_at' => Carbon::now()],
            ['nome' => 'Gelo', 'hexadecimal' => '#FCECDA', 'created_at' => Carbon::now()],
            ['nome' => 'Dourado', 'hexadecimal' => '#E4E0C5', 'created_at' => Carbon::now()]
        ];

        Cor::insert($data);
    }
}
