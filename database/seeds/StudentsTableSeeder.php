<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 9 ; $i++) { 
            $newStudent = new Student();
            $newStudent->name = $faker->firstName;
            $newStudent->surname = $faker->lastName;
            $newStudent->badge = $faker->randomNumber(6);
            $newStudent->email = $faker->email;
            $newStudent->description = $faker->sentence(10);
            $newStudent->save();
        }
       
    }
}
