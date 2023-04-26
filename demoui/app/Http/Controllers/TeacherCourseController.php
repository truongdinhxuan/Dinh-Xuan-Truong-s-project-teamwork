<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\TeacherCourse;
class TeacherCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacherCourses = TeacherCourse::all();

        return view('teachercourse.index', compact('teacherCourses'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        $courses = Course::all();

        return view('teachercourse.create', compact('teachers', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'teacher_id' => 'required',
            'course_id' => 'required',
        ]);

       // $teacherCourse = TeacherCourse::create($request->all());
    //    $teacherCourse = new TeacherCourse();
    //    $teacherCourse->teacher_id = $request->teacher_id;
    //    $teacherCourse->course_id = $request->course_id;
    TeacherCourse::create($request->all());
        return redirect()->route('teachercourse.index')
            ->with('success', 'Teacher course created successfully.');
    }

    public function show(TeacherCourse $teacherCourse )
    {
        $teacherCourse::all();
        return view('teachercourse.show', compact('teacherCourse'));
    }

    public function edit(TeacherCourse $teacherCourse)
    {
        $teachers = Teacher::all();
        $courses = Course::all();

        return view('teachercourse.edit', compact('teacherCourse', 'teachers', 'courses'));
    }

    public function update(Request $request, TeacherCourse $teacherCourse)
    {
        $request->validate([
            'teacher_id' => 'required',
            'course_id' => 'required',
        ]);

        $teacherCourse->update($request->all());

        return redirect()->route('teachercourse.index')
            ->with('success', 'Teacher course updated successfully.');
    }

    public function destroy(TeacherCourse $teacherCourse)
    {
        $teacherCourse->delete();

        return redirect()->route('teachercourse.index')
            ->with('success', 'Teacher course deleted successfully.');
    }
}
