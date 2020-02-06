<?php

use Illuminate\Database\Seeder;

class SponsorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 50; $i++)
        {
            DB::table('sponsors')->insert([
                'name' => $faker->name,
                'address' => $faker->streetAddress,
                'town' => $faker->city,
                'mail_address' => $faker->email,
                'phone_number' => $faker->phoneNumber
            ]);
        }
    }
}
