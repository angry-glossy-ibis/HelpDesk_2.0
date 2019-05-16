<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Position;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = ['Должность раз', 'Должность два'];
        foreach ($positions as $position) {
            $timestamp = Carbon::now();
            Position::create([
                'name' => $position,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ]);
        }
    }
}
