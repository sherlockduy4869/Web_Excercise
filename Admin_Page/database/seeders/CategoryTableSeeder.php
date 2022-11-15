<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('tbl_category')->insert(
        //     [
        //         [   
        //             "name" => "A",
        //             "email" => "meo.peo190201@vnuk.edu.vn",
        //             "contact_number" => "0899850846"
        //         ],
        //         [
        //             "name" => "B",
        //             "email" => "b.peo190201@vnuk.edu.vn",
        //             'contact_number' => "098777676783"
        //         ]
        //     ]
        // );

        Category::factory(30)->create();
    }
}
