<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exams = [
            [
                'name' => 'Portfolio',
                'grade' => 8.5,
                'ec_id' => 1,
            ],
            [
                'name' => 'Personality 1',
                'grade' => 8,
                'ec_id' => 2,
            ],
            [
                'name' => 'Personality 2',
                'grade' => 0,
                'ec_id' => 3,
            ],
            [
                'name' => 'Assesment Exam',
                'grade' => 10,
                'ec_id' => 4,
            ],
            [
                'name' => 'Written Exam',
                'grade' => 9.8,
                'ec_id' => 5,
            ],
            [
                'name' => 'Case Study Exam',
                'grade' => 10,
                'ec_id' => 6,
            ],
            [
                'name' => 'Case Study Exam',
                'grade' => 10,
                'ec_id' => 7,
            ],
            [
                'name' => 'Project',
                'grade' => 8.5,
                'ec_id' => 7,
            ],
            [
                'name' => 'Case Study Exam',
                'grade' => 9.9,
                'ec_id' => 8,
            ],
            [
                'name' => 'Project',
                'grade' => 6.2,
                'ec_id' => 9,
            ],
            [
                'name' => 'Assessment',
                'grade' => 10,
                'ec_id' => 9,
            ],
            [
                'name' => 'Report',
                'grade' => 6.4,
                'ec_id' => 9,
            ],
            [
                'name' => 'Portfolio',
                'grade' => 0,
                'ec_id' => 10,
            ],
            [
                'name' => 'Project',
                'grade' => 0,
                'ec_id' => 10,
            ],
            [
                'name' => 'Assessment',
                'grade' => 0,
                'ec_id' => 10,
            ],
            
        ];

        foreach($exams as $exam) {
            Exam::create($exam);
        }
    }
}
