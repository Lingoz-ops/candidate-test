<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeacherCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('customers_cases')->insert([
            [
                'teacher_id' => 1, 'course_id' => 1
            ],
            [
                'teacher_id' => 1, 'course_id' => 2
            ],
            [
                'teacher_id' => 1, 'course_id' => 3
            ],
            [
                'teacher_id' => 2, 'course_id' => 2
            ],
            [
                'teacher_id' => 3, 'course_id' => 2
            ],
        ]);
    }
}
