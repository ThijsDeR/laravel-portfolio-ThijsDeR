<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('grade.index', [
            'title' => 'Grades',
            'grades' => Grade::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grade.create', [
            'title' => 'Create Grade'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Grade::create($this->validateGrade($request));

        return redirect()->route('grade.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        return view('grade.show', [
            'title' => 'Grade ' . $grade->id,
            'grade' => $grade
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        return view('grade.edit', [
            'title' => 'Grade ' . $grade->id,
            'grade' => $grade
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        // $grade->update($this->validateGrade($request));

        $grade->addResult($request->best_grade);

        return redirect()->route('grade.show', $grade->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect()->route('grade.index');
    }

    public function validateGrade(Request $request) {
        return $request->validate([
            'course_name' => 'required',
            'test_name' => 'required'
        ]);
    }
}
