<?php

namespace Tests\Unit;

use App\Models\Course;
use App\Models\Ec;
use App\Models\Exam;
use App\Models\Quartile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EcTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_if_ec_passed_on_good_grade()
    {
        $quartile = Quartile::factory()->create();
        $course = Course::create(['name' => 'test_course', 'quartile_id' => $quartile->id]);
        $ec = Ec::create(['ec' => 10, 'course_id' => $course->id]);
        Exam::create(['name' => 'test exam', 'grade' => 10, 'ec_id' => $ec->id]);
        $this->assertTrue($ec->passed());
        $this->assertTrue($course->ec_amount() == 10);
        $this->assertTrue($course->max_ec_amount() == 10);
    }

    public function test_if_ec_passed_on_enough_grade()
    {
        $quartile = Quartile::factory()->create();
        $course = Course::create(['name' => 'test_course', 'quartile_id' => $quartile->id]);
        $ec = Ec::create(['ec' => 10, 'course_id' => $course->id]);
        Exam::create(['name' => 'test exam', 'grade' => 5.5, 'ec_id' => $ec->id]);
        $this->assertTrue($ec->passed());
        $this->assertTrue($course->ec_amount() == 10);
        $this->assertTrue($course->max_ec_amount() == 10);
    }

    public function test_if_ec_failed_on_bad_grade()
    {
        $quartile = Quartile::factory()->create();
        $course = Course::create(['name' => 'test_course', 'quartile_id' => $quartile->id]);
        $ec = Ec::create(['ec' => 10, 'course_id' => $course->id]);
        Exam::create(['name' => 'test exam', 'grade' => 1, 'ec_id' => $ec->id]);
        $this->assertFalse($ec->passed());
        $this->assertTrue($course->ec_amount() == 0);
        $this->assertTrue($course->max_ec_amount() == 10);
    }

    public function test_if_ec_failed_on_close_grade()
    {
        $quartile = Quartile::factory()->create();
        $course = Course::create(['name' => 'test_course', 'quartile_id' => $quartile->id]);
        $ec = Ec::create(['ec' => 10, 'course_id' => $course->id]);
        Exam::create(['name' => 'test exam', 'grade' => 5.4, 'ec_id' => $ec->id]);
        $this->assertFalse($ec->passed());
        $this->assertTrue($course->ec_amount() == 0);
        $this->assertTrue($course->max_ec_amount() == 10);
    }
}
