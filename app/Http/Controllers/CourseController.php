<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Quartile;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => [
            'create',
            'store',
            'edit',
            'update',
            'destroy'
        ]]);   
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Quartile $quartile)
    {
        return view('courses.index', [
            'title' => 'Courses',
            'courses' => Course::where('quartile_id', $quartile->id)->get(),
            'quartile' => $quartile
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Quartile $quartile)
    {
        return view('courses.create', [
            'title' => 'Create Course',
            'quartile' => $quartile
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Quartile $quartile, Request $request)
    {
        $courseArray = $this->validateCourse($request);
        $courseArray['quartile_id'] = $quartile->id;
        Course::create($courseArray);

        return redirect()->route('courses.index', [$quartile]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Quartile $quartile, Course $course)
    {
        return view('courses.show', [
            'title' => 'Course ' . $course->id,
            'course' => $course,
            'quartile' => $quartile
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Quartile $quartile, Course $course)
    {
        return view('courses.edit', [
            'title' => 'Course ' . $course->id,
            'course' => $course,
            'quartile' => $quartile
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Quartile $quartile, Request $request, Course $course)
    {
        // $course->update($this->validatecourse($request));
        $courseArray = $this->validateCourse($request);
        $courseArray['quartile_id'] = $quartile->id;
        $course->update($courseArray);

        return redirect()->route('courses.show', [$quartile, $course->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quartile $quartile, Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index', [$quartile]);
    }

    public function validateCourse(Request $request) {
        return $request->validate([
            'name' => 'required'
        ]);
    }
}
