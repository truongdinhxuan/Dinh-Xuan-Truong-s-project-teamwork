<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Course;


class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $enrollment = Enrollment::all();

        return view('enrollments.index', compact('enrollment'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $students = Student::all();
        $courses = Course::all();

        return view('enrollments.create', compact('students', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'student_id' => 'required',
            'course_id' => 'required',
        ]);
    Enrollment::create($request->all());
        return redirect()->route('enrollments.index')
            ->with('success', 'Enrollments course created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $enrollment = Enrollment::where('id', $id)->first();
        return view('enrollments.show', compact('enrollment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrollment $enrollments,$id)
    {
        //
        $students = Student::all();
        $courses = Course::all();
        $enrollments = Enrollment::find($id);
        return view('enrollments.edit', compact('enrollments', 'students', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'student_id' => 'required',
            'course_id' => 'required',
        ]);
        $enrollment= Enrollment::find($id);
        $enrollment->update($request->all());

        return redirect()->route('enrollments.index')
            ->with('success', 'Enrollment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $enrollment= Enrollment::where('id', $id)->first();
        $enrollment->delete();
        return redirect()->route('enrollments.index')
            ->with('success', 'Teacher course deleted successfully.');
    }
}
