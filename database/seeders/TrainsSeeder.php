<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->randomElement(['Roma', 'Milano', 'Napoli', 'Bari', 'Palermo', 'Catania']);
            $newTrain->arrival_station = $faker->randomElement(['Bologna', 'Ancona', 'Firenze', 'Reggio Calabria', 'Cagliari']);
            $newTrain->departure_datetime = $faker->dateTimeBetween('-1 day', '+1 day');
            $newTrain->arrival_datetime = $faker->dateTimeBetween('-1 day', '+2 day');
            $newTrain->train_code = 'AB' . $faker->randomDigit();
            $newTrain->wagons_number = $faker->numberBetween(5, 12);
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
