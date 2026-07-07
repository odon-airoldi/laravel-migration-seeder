<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 10; $i++) {

            $newTrain = new Train();
            $newTrain->azienda = $faker->randomElement(['Trenitalia', 'Italo', 'Frecciarossa']);
            $newTrain->stazione_partenza = $faker->city() . ' Centrale';
            $newTrain->stazione_arrivo = $faker->city() . ' Centrale';
            $partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->orario_partenza = $partenza;
            $newTrain->orario_arrivo = (clone $partenza)->modify('+' . random_int(60, 180) . ' minutes');
            $newTrain->codice_treno = $faker->regexify('[A-Z]{3}[0-9]{5}');
            $newTrain->totale_carrozze = random_int(4, 16);
            $newTrain->treno_ritardo = random_int(0, 12) * 5;
            $newTrain->treno_cancellato = $faker->boolean(10);
            $newTrain->save();

        }

    }
}
