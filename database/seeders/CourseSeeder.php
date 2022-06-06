<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'name' => 'Personal Professional Development',
                'quartile' => 0,
                'ec' => 15
            ],
            [
                'name' => 'Programme and Career Orientation',
                'quartile' => 1,
                'ec' => 2.5
            ],
            [
                'name' => 'Computer Science Basics',
                'quartile' => 1,
                'ec' => 5
            ],
            [
                'name' => 'Programming Basics',
                'quartile' => 1,
                'ec' => 5
            ],
            [
                'name' => 'Object Oriented Programming',
                'quartile' => 2,
                'ec' => 10
            ],
            [
                'name' => 'Framework development 1',
                'quartile' => 3,
                'ec' => 5
            ],
            [
                'name' => 'Framework Project 1',
                'quartile' => 3,
                'ec' => 7.5
            ],
            [
                'name' => 'Framework Project 2',
                'quartile' => 4,
                'ec' => 10
            ],
        ];

        foreach($courses as $course) {
            Course::create($course);
        }
    }
}
