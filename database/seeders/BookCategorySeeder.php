<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\TryCatch;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 20; $i++){
            for($j = 0; $j < 2; $j++)
                try {
                    BookCategory::create([
                        'book_id' => $i,
                        'category_id' => rand(1, 5)
                    ]);
                } catch (\Throwable $th) {
                    
                }
        }
    }
}