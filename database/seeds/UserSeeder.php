<?php

use Illuminate\Database\Seeder;
use JansenFelipe\FakerBR\FakerBR;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->addProvider(new FakerBR($faker));

        for($i=1; $i <= 10; $i++){

            User::insert([
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'password' => $faker->password(),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ]);

        }
    }
}
