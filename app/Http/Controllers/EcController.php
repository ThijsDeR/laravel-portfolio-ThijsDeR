<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Ec;
use App\Models\Quartile;
use Illuminate\Http\Request;

class EcController extends Controller
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
    public function index(Quartile $quartile, Course $course)
    {
        return view('ecs.index', [
            'title' => 'Ecs',
            'ecs' => Ec::where('course_id', $course->id)->get(),
            'quartile' => $quartile,
            'course' => $course
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Quartile $quartile, Course $course)
    {
        return view('ecs.create', [
            'title' => 'Create Ec',
            'quartile' => $quartile,
            'course' => $course
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Quartile $quartile, Course $course, Request $request)
    {
        $ecArray = $this->validateEc($request);
        $ecArray['course_id'] = $course->id;
        Ec::create($ecArray);

        return redirect()->route('ecs.index', [$quartile, $course]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ec  $ec
     * @return \Illuminate\Http\Response
     */
    public function show(Quartile $quartile, Course $course, Ec $ec)
    {
        return view('ecs.show', [
            'title' => 'Ec ' . $ec->id,
            'ec' => $ec,
            'quartile' => $quartile,
            'course' => $course
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ec  $ec
     * @return \Illuminate\Http\Response
     */
    public function edit(Quartile $quartile, Course $course, Ec $ec)
    {
        return view('ecs.edit', [
            'title' => 'Ec ' . $ec->id,
            'ec' => $ec,
            'quartile' => $quartile,
            'course' => $course
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ec  $ec
     * @return \Illuminate\Http\Response
     */
    public function update(Quartile $quartile, Course $course, Request $request, Ec $ec)
    {
        // $ec->update($this->validateec($request));
        $ecArray = $this->validateEc($request);
        $ecArray['course_id'] = $course->id;
        $ec->update($ecArray);

        return redirect()->route('ecs.show', [$quartile, $course, $ec->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ec  $ec
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quartile $quartile, Course $course, Ec $ec)
    {
        $ec->delete();

        return redirect()->route('ecs.index', [$quartile, $course]);
    }

    public function validateEc(Request $request) {
        return $request->validate([
            'ec' => 'required'
        ]);
    }
}
