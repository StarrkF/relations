<?php

namespace Database\Seeders;

use App\Models\Auhtor;
use App\Models\Book;
use App\Models\Category;
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
        for ($i=1; $i <= 10; $i++) { 
            
            Category::create([
                'catname'=>'cat '.$i,
            ]);

            Auhtor::create([
                'writer'=>'writer '.$i,
            ]);

            Book::create([
                'author_id'=>$i,
                'category_id'=>$i,
            ]);

        }

        

    }
}
