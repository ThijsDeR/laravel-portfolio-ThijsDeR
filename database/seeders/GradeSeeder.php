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
                'course_id' => 1,
                'name' => 'Portfolio'
            ],
            [
                'course_id' => 1,
                'name' => 'Personality 1'
            ],
            [
                'course_id' => 1,
                'name' => 'Personality 2'
            ],
            [
                'course_id' => 2,
                'name' => 'Assesment Exam'
            ],
            [
                'course_id' => 3,
                'name' => 'Written Exam'
            ],
            [
                'course_id' => 4,
                'name' => 'Case Study Exam'
            ],
            [
                'course_id' => 5,
                'name' => 'Case Study Exam'
            ],
            [
                'course_id' => 5,
                'name' => 'Project'
            ],
            [
                'course_id' => 6,
                'name' => 'Case Study Exam'
            ],
            [
                'course_id' => 7,
                'name' => 'Project'
            ],
            [
                'course_id' => 7,
                'name' => 'Assessment'
            ],
            [
                'course_id' => 7,
                'name' => 'Report'
            ],
            [
                'course_id' => 8,
                'name' => 'Portfolio'
            ],
            [
                'course_id' => 8,
                'name' => 'Project'
            ],
            [
                'course_id' => 8,
                'name' => 'Assessment'
            ],
        ];

        foreach($grades as $grade) {
            Grade::create($grade);
        }
    }
}
