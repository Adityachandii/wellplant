<?php

namespace Database\Seeders;

use App\Models\Reminder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReminderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        Reminder::create([
            'type' => 'water',
            'date' => '2023-06-20 09:00:00',
            'done' => false,
            'infoPlantId' => 1
        ]);
        Reminder::create([
            'type' => 'water',
            'date' => '2023-06-21 09:00:00',
            'done' => false,
            'infoPlantId' => 1
        ]);
        Reminder::create([
            'type' => 'water',
            'date' => '2023-06-22 09:00:00',
            'done' => false,
            'infoPlantId' => 1
        ]);
        Reminder::create([
            'type' => 'water',
            'date' => '2023-06-23 09:00:00',
            'done' => false,
            'infoPlantId' => 1
        ]);
        Reminder::create([
            'type' => 'fertilize',
            'date' => '2023-06-20 10:00:00',
            'done' => false,
            'infoPlantId' => 1
        ]);
        Reminder::create([
            'type' => 'fertilize',
            'date' => '2023-06-21 10:00:00',
            'done' => false,
            'infoPlantId' => 1
        ]);
        Reminder::create([
            'type' => 'fertilize',
            'date' => '2023-06-22 10:00:00',
            'done' => false,
            'infoPlantId' => 1
        ]);
        Reminder::create([
            'type' => 'fertilize',
            'date' => '2023-06-23 10:00:00',
            'done' => false,
            'infoPlantId' => 1
        ]);
        DB::commit();
    }
}
