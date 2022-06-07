<?php

namespace Database\Seeders;

use App\Models\Ec;
use Illuminate\Database\Seeder;

class EcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ecs = [
            [
                'ec' => 12.50,
                'course_id' => 1
            ],
            [
                'ec' => 1.25,
                'course_id' => 1
            ],
            [
                'ec' => 1.25,
                'course_id' => 1
            ],
            [
                'ec' => 2.50,
                'course_id' => 2
            ],
            [
                'ec' => 5.00,
                'course_id' => 3
            ],
            [
                'ec' => 5.00,
                'course_id' => 4
            ],
            [
                'ec' => 10.00,
                'course_id' => 5
            ],
            [
                'ec' => 5.00,
                'course_id' => 6
            ],
            [
                'ec' => 7.50,
                'course_id' => 7
            ],
            [
                'ec' => 10.00,
                'course_id' => 8
            ],

        ];

        foreach($ecs as $ec) {
            Ec::create($ec);
        }
    }
}
