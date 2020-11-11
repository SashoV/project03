<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'маркетинг',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et massa tellus. Duis eget purus biam.',
                'image' => '/img/home-office.jpg',
            ],
            [
                'name' => 'дизајн',
                'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex. Lorem ipsum dolor sit amet, consectetur tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et massa tellus. Duis eget purus biam.',
                'image' => '/img/home-office-1.jpg',
            ],
            [
                'name' => 'UX/UI',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur tincidunt.',
                'image' => '/img/home-office-2.jpg',
            ],
            [
                'name' => 'Data Science',
                'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et massa tellus. Duis eget purus biam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et massa tellus. Duis eget purus biam.',
                'image' => '/img/student-1.jpg',
            ],
            [
                'name' => 'програмирање',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et massa tellus. Duis eget purus biam.',
                'image' => '/img/workplace-1.jpg',
            ],
            [
                'name' => 'бизнис',
                'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.',
                'image' => '/img/write-1.jpg',
            ],
        ]);
    }
}
