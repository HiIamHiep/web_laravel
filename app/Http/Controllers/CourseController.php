<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Course::query()->get();

        return view('course.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
    }


    public function store(Request $request)
    {
//        $object = new Course();
//        $object->fill($request->except('_token'));
//        $object->save();

        Course::create($request->except('_token'));

        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

 function edit(Course $course)
    {
       return view('course.edit', [
           'each' => $course
       ]);
    }

    public function update(Request $request, Course $course)
    {
//        Course::where('id', $course->id)->update($request->except([
//            '_token',
//            '_method',
//        ])
//        );

        $course->update(
            $request->except([
                '_token',
                '_method',
            ])
        );

//        $course->fill($request->except('_token'));
//        $course->save();

        return redirect()->route('courses.index');
    }


    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index');
    }
}
