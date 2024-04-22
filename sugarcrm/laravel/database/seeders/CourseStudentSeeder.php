<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseStudentSeeder extends Seeder
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
                'course_id' => 1, 'student_id' => 1
            ],
            [
                'course_id' => 2, 'student_id' => 1
            ],
            [
                'course_id' => 3, 'student_id' => 1
            ],
            [
                'course_id' => 2, 'student_id' => 2
            ],
            [
                'course_id' => 3, 'student_id' => 2
            ],
            [
                'course_id' => 4, 'student_id' => 3
            ],
            [
                'course_id' => 5, 'student_id' => 1
            ],
            [
                'course_id' => 5, 'student_id' => 2
            ],
            [
                'course_id' => 2, 'student_id' => 4
            ],
            [
                'course_id' => 4, 'student_id' => 4
            ],
        ]);
    }
}
