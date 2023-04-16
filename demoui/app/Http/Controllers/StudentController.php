<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Student::latest()->paginate(5);
        return view('students.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
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
            'name'=> 'required',
            'email'=>'required|email',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|'
        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);
        $student = new Student;
        $student->name = $request->name;
        $student->email= $request->email;
        $student->address= $request->address;
        $student->gender = $request->gender;
        $student->image = $file_name;
        $student->save();

        return redirect()->route('students.index')->with('success', 'Student Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('students.show', compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
        $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'address'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $image = $request->hidden_student_image;

        if($request->student_image != '')
        {
            $image = time() . '.' . request()->student_image->getClientOriginalExtension();

            request()->image->move(public_path('images'), $image);
        }

        $student = Student::find($request->hidden_id);

        $student->name = $request->name;

        $student->email = $request->email;
        
        $student->address = $request->address;

        $student->gender = $request->gender;

        $student->image = $image;

        $student->save();

        return redirect()->route('students.index')->with('success', 'Student Data has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student Data deleted successfully');
    }
}
