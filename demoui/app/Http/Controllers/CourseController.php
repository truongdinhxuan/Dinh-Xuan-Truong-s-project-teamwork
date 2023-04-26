<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data = Course::latest()->paginate(5);
        // return view('course.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
        $course = Course::all();
        return view('course.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('course.create');
        $teachers = Teacher::all();
        return view('course.create');
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
            'course_name'=> 'required',
            'course_des'=>'required',
           
        ]);
        $courses = new Course();
        $courses->course_name = $request->course_name;
        $courses->course_des = $request->course_des;
       
        $courses->save();
        return redirect()->route('course.index')->with('success', 'Student Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
       // $course = Course::with('teacher', 'students')->findOrFail($id);
        return view('course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $course = Course::findOrFail($id);
        $teachers = Teacher::all();
        return view('course.edit', ['course' => $course, 'teachers' => $teachers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
        $request->validate([
            'course_name' => 'required|max:255',
            'course_des' => 'required|max:1000',
           // 'teacher_id' => 'required|exists:teachers,id'
        ]);
        $course = Course::find($request->hidden_id);
        $course->course_name = $request->course_name;
        $course->course_des = $request->course_des;
        $course->save();
        return redirect()->route('course.show',['course' => $course]);
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
        Course::destroy($id);
        return redirect()->route('course.index');
    }
}
