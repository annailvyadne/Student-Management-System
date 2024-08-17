<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $courses = Course::orderBy('cname')->get();
        // dd($courses);
        return view('info.courses', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('info.crud-courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
  
     public function store(Request $request)
    {

        $course = new Course();

        $course->cname = trim($request->cname);
        $course->desc = trim($request->desc);
        $course->save();

        return redirect()->route('courses.index')->with('success', 'Course added successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        return view('info.crud-courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::find($id);

        $course->cname = trim($request->cname);
        $course->desc = trim($request->desc);
        $course->save();

        return redirect()->route('courses.index')->with('success', 'Course added successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('courses.index');
    }
}
