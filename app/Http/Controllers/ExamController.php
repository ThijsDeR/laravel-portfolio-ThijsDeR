<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Ec;
use App\Models\Exam;
use App\Models\Quartile;
use Illuminate\Http\Request;

class ExamController extends Controller
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
    public function index(Quartile $quartile, Course $course, Ec $ec)
    {
        return view('exams.index', [
            'title' => 'Exams',
            'exams' => Exam::where('ec_id', $ec->id)->get(),
            'quartile' => $quartile,
            'course' => $course,
            'ec' => $ec
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Quartile $quartile, Course $course, Ec $ec)
    {
        return view('exams.create', [
            'title' => 'Create Exam',
            'quartile' => $quartile,
            'course' => $course,
            'ec' => $ec
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Quartile $quartile, Course $course, Ec $ec, Request $request)
    {
        $examArray = $this->validateExam($request);
        $examArray['ec_id'] = $ec->id;
        Exam::create($examArray);

        return redirect()->route('exams.index', [$quartile, $course, $ec]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Quartile $quartile, Course $course, Ec $ec, Exam $exam)
    {
        return view('exams.show', [
            'title' => 'Exam ' . $exam->id,
            'exam' => $exam,
            'quartile' => $quartile,
            'course' => $course,
            'ec' => $ec
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Quartile $quartile, Course $course, Ec $ec, Exam $exam)
    {
        return view('exams.edit', [
            'title' => 'Exam ' . $exam->id,
            'exam' => $exam,
            'quartile' => $quartile,
            'course' => $course,
            'ec' => $ec
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Quartile $quartile, Course $course, Ec $ec, Request $request, Exam $exam)
    {
        // $exam->update($this->validateexam($request));
        $examArray = $this->validateExam($request);
        $examArray['ec_id'] = $ec->id;
        $exam->update($examArray);

        return redirect()->route('exams.show', [$quartile, $course, $ec, $exam->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quartile $quartile, Course $course, Ec $ec, Exam $exam)
    {
        $exam->delete();

        return redirect()->route('exams.index', [$quartile, $course, $ec]);
    }

    public function validateExam(Request $request) {
        return $request->validate([
            'name' => 'required',
            'grade' => 'required'
        ]);
    }
}
