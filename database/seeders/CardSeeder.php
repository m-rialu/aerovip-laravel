<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Card::create([
            'price' => 'R$1.189,90',
            'date' => 'Qua.29/02',
            'local' => 'POA - RIO',
            'time' => '09:00 - 10:50'
        ]);

    }
}
