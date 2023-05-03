<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i=0;$i<50;$i++){
            DB::table('customers')->insert([
                'name' => $faker->name(),
                'gender'=>$faker->randomElement(['male','female']),
                'address'=>$faker->address(),
                'phone'=>$faker->phoneNumber(),
            ]); 
        }
    }
}
