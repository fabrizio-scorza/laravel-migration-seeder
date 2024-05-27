<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // svuotiamo i dati nella tabella
        DB::table('trains')->truncate();

        //generiamo i dati tramite il faker

        for ($i = 0; $i < 100; $i++) {
            // creo l'istanza del model train
            $new_train = new Train();

            // popolo le proprietà dell'istanza

            $new_train->azienda = $faker->randomElement(['Trenitalia', 'Italo']);

            $new_train->stazione_di_partenza = $faker->city();

            $new_train->stazione_di_arrivo = $faker->city();

            // assegno il random della data ad una variabile per usarla anche come parametro di riferimento nella data di arrivo
            $partenza = $faker->dateTimeBetween(now(), '+15 days');

            $new_train->orario_di_partenza = $partenza;

            $new_train->orario_di_arrivo = $faker->dateTimeBetween($partenza, '+36 hours');

            $new_train->codice_treno = $faker->unique()->bothify('??-#####');

            $new_train->numero_carrozze = $faker->numberBetween(8, 42);

            $new_train->in_orario = $faker->randomElement([true, false]);

            $new_train->cancellato = $faker->randomElement([true, false]);

            // salviamo i dati
            $new_train->save();
        }
    }
}
