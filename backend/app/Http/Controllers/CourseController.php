<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('course.index', ['courses' => $courses]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_course' => ['required', 'string', 'max:300'],
            'credits' => ['required', 'integer', 'gt:0'],
            'name_proffesor' => ['required', 'string', 'max:100'],
            'course_prerequisite' => ['required', 'string', 'max:300'],
            'self_work_hours' => ['required', 'integer', 'gt:0'],
            'class_work_hours' => ['required', 'integer', 'gt:0'],
        ]);

        Course::create([
            'name_course' => $request->name_course,
            'credits' => $request->credits,
            'name_proffesor' => $request->name_proffesor,
            'course_prerequisite' => $request->course_prerequisite,
            'self_work_hours' => $request->self_work_hours,
            'class_work_hours' => $request->class_work_hours,
        ]);

        return redirect('/course');
    }

    public function actionEdit($id)
    {
        $course = Course::find($id);

        if (empty($course)) {
            return redirect('/course');
        }

        return view('/course.edit', ['course' => $course]);
    }

    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'name_course' => ['required', 'string', 'max:300'],
            'credits' => ['required', 'integer', 'gt:0'],
            'name_proffesor' => ['required', 'string', 'max:100'],
            'course_prerequisite' => ['required', 'string', 'max:300'],
            'self_work_hours' => ['required', 'integer', 'gt:0'],
            'class_work_hours' => ['required', 'integer', 'gt:0'],
        ]);

        $course = Course::find($id);

        if (empty($course)) {
            return redirect('/course');
        }

        $course->name_course = $request->name_course;
        $course->credits = $request->credits;
        $course->name_proffesor = $request->name_proffesor;
        $course->course_prerequisite = $request->course_prerequisite;
        $course->self_work_hours = $request->self_work_hours;
        $course->class_work_hours = $request->class_work_hours;

        $course->save();

        return redirect('/course');
    }

    public function destroy($id)
    {
        Course::where('id',$id)->delete();

        return redirect('/course');
    }
}
