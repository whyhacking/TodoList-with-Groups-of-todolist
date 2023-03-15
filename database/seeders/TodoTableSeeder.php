<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;
use Faker\Factory;


class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // hard coded data :)

        $p = new Todo;
        $p->title = "Work";
        $p->group = "1";
        $p->completed = true;
        $p->save();



        Todo::factory()->count(25)->create();
    }
}
