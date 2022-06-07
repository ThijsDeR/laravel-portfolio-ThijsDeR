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
                'quartile_id' => 1,
            ],
            [
                'name' => 'Programme and Career Orientation',
                'quartile_id' => 2,
            ],
            [
                'name' => 'Computer Science Basics',
                'quartile_id' => 2,
            ],
            [
                'name' => 'Programming Basics',
                'quartile_id' => 2,
            ],
            [
                'name' => 'Object Oriented Programming',
                'quartile_id' => 3,
            ],
            [
                'name' => 'Framework development 1',
                'quartile_id' => 4,
            ],
            [
                'name' => 'Framework Project 1',
                'quartile_id' => 4,
            ],
            [
                'name' => 'Framework Project 2',
                'quartile_id' => 5,
            ],
        ];

        foreach($courses as $course) {
            Course::create($course);
        }
    }
}
