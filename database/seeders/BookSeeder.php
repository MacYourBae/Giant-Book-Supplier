<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        for($i = 1; $i <= 20; $i++){
            Book::create([
                'publisher_id' => rand(1, 5),
                'title' => strtoupper($faker->words(rand(1, 3), true)),
                'author' => $faker->name(),
                'year' => $faker->year(),
                'synopsis' => $faker->paragraph(5),
                'image' => 'image/book/dummy.jpg'
            ]);
        }
    }
}
