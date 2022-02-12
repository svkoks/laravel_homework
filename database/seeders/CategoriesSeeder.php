<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    private function getData(): array
    {
        $faker = Factory::create();
        $data = [];

        for($i = 0; $i < 10; $i++) {
            $data[] = [
                'resource_id' => 1,
                'title' => $faker->sentence(mt_rand(3, 10)),
                'text' => $faker->text(mt_rand(100, 200))
            ];

        }
        return $data;
    }
}