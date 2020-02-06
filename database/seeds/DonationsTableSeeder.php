<?php

use Illuminate\Database\Seeder;

class DonationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $sponsors = \App\Sponsor::all()->pluck('id')->toArray();

        for($i = 0; $i < 200; $i++)
        {
            DB::table('donations')->insert([
                'sponsor_id' => $faker->randomElement($sponsors),
                'date' => $faker->dateTimeThisCentury(),
                'amount' => $faker->numberBetween(5, 250)
            ]);
        }
    }
}
