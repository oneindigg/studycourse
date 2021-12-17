<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Slider;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    protected $destination = 'images/courseImage';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Courses::orderBy('id', 'DESC')->get();
        return view('backend.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' =>  'required',
            'price' =>  'required',
            'image' =>  'required',
        ]);

        $course = new Courses();

        $course->title = $request->title;
        $course->price = $request->price;

        if ($request->hasFile('image')) {
            $randVal = rand(1111, 9999);
            $img = $request->file('image');
            $course->image = $randVal . time() . $img->getClientOriginalName();
            $img->move($this->destination, $course->image);
        }

        if ($course->save()) {

            $request->session()->flash('success_msg', 'Course Created Successfully');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
        }
        return redirect()->action('Admin\CoursesController@index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Courses::find($id);

        return view('backend.courses.edit', compact('course'));
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
        $request->validate([
            'title' =>  'required',
            'price' =>  'required',
            'image' =>  'required',
        ]);

        $course = Courses::find($id);

        $course->title = $request->title;
        $course->price = $request->price;

        if ($request->hasFile('image')) {
            $courseImage = ("$this->destination/{$course->image}"); // get previous image from folder
            if (Courses::exists($courseImage)) { // unlink or remove previous image from folder
                unlink($courseImage);
            }
            $randVal = rand(1111, 9999);
            $img = $request->file('image');
            $course->image = $randVal . time() . $img->getClientOriginalName();
            $img->move($this->destination, $course->image);
        }

        if ($course->save()) {

            $request->session()->flash('success_msg', 'Course Updated Successfully');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
        }
        return redirect()->action('Admin\CoursesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Courses::find($id);

        $course->delete();

        return redirect()->action('Admin\CoursesController@index');
    }
}