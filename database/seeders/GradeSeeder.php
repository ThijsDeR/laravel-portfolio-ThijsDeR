<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grades = [
            [
                'course_name' => 'Personal Professional Development',
                'test_name' => 'Portfolio'
            ],
            [
                'course_name' => 'Personal Professional Development',
                'test_name' => 'Personality 1'
            ],
            [
                'course_name' => 'Personal Professional Development',
                'test_name' => 'Personality 2'
            ],
            [
                'course_name' => 'Programme and Career Orientation',
                'test_name' => 'Assesment Exam'
            ],
            [
                'course_name' => 'Computer Science Basics',
                'test_name' => 'Written Exam'
            ],
            [
                'course_name' => 'Programming Basics',
                'test_name' => 'Case Study Exam'
            ],
        ];


        foreach($grades as $grade) {
            $grade_class = new Grade($grade);
            $grade_class->save();
        }
    }
}
