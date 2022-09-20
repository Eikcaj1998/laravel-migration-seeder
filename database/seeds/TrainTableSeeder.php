<?php
use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        $new_train = new Train();
        $new_train ->company ='Trenitalia';
        $new_train ->departure_station ='Milano-Centrale';
        $new_train ->arrival_station ='Roma-Termini';
        $new_train ->departure_time ='15:29:29';
        $new_train ->arrival_time ='18:29:29';
        $new_train ->train_code = '26315';
        $new_train ->carriage_number = 5;
        $new_train ->in_time = 1;
        $new_train ->canceled = 1;  
        $new_train->save();

        for($i = 1; $i <10; $i++){
            $train = new Train();

            $train->company = $faker->word();
            $train->departure_station = $faker->word();
            $train->arrival_station = $faker->word();
            $train->arrival_time = $faker->time();
            $train->departure_time = $faker->time();
            $train->train_code = $faker->randomNumber(5, true);
            $train->carriage_number = $faker->randomNumber(2, false);
            $train->in_time = $faker->boolean();
            $train->canceled = $faker->boolean();
            $train->save();
        }
    }
}
