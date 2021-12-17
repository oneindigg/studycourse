<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    protected $destination = 'images/TestimonialImage';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::get();
        return view('backend.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial();

        $request->validate([
            'name'  =>  'required',
            'email'  =>  'required',
            'designation'  =>  'required',
            'subject'  =>  'required',
            'message'  =>  'required',
            'image'    =>   'required',

        ]);

        $testimonial->name = $request->name;
        $testimonial->email = $request->email;
        $testimonial->designation = $request->designation;
        $testimonial->subject = $request->subject;
        $testimonial->message = $request->message;

        if ($request->hasFile('image')) {
            $randVal = rand(1111, 9999);
            $img = $request->file('image');
            $testimonial->image = $randVal . time() . $img->getClientOriginalName();
            $img->move($this->destination, $testimonial->image);
        }

        if ($testimonial->save()) {

            $request->session()->flash('success_msg', ' Message sent successfully');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
        }
        return redirect()->action('Home\IndexController@contact');
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();

        if ($testimonial->image) {
            if (file_exists($this->destination . '/' . $testimonial->image)) {
                unlink($this->destination . '/' . $testimonial->image);
            }
        }

        return redirect()->back();
    }
}