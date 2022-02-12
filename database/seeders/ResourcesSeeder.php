<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resources')->insert($this->getData());
    }

    private function getData(): array
    {
        $faker = Factory::create();
        $data = [];

        for($i = 0; $i < 10; $i++) {
            $data = [
                'title' => $faker->sentence(mt_rand(3, 10)),
                'url' => $faker->url(),
            ];
        }
        
        return $data;
    }
}