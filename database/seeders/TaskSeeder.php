<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            ["name" => "Ivan", "email" => "ivan@gmail.com"],
            ["name" => "Alex", "email" => "alex@gmail.com"],
            ["name" => "Lee", "email" => "lee@gmail.com"],
            ["name" => "Max", "email" => "max@gmail.com"],
            ["name" => "irina", "email" => "irina@gmail.com"],

        ];

        foreach ($authors  as $author) {
            $author["created_at"]  = Carbon::now();
            $author["update_at"]  = Carbon::now();
            DB::table('articles')->insert([
                "name" => $author["name"],
                "email" => $author["email"],
                "task_body" => "Задача пользователя " . $author["name"],
                "done" => rand(0,1),
                "created_at" => $author["created_at"],
                "updated_at" => $author["update_at"],
            ]);

        }
    }
}
