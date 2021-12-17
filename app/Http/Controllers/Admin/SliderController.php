<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $destination = 'images/sliderImage';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'DESC')->get();
        return view('backend.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
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
            'title' => 'required',
            'description'   => 'required',
            'link'  =>  'required',
            'image' => 'required',
        ]);

        $slider = new Slider();

        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->link = $request->link;

        if ($request->hasFile('image')) {

            $randVal = rand(1111, 9999);
            $img = $request->file('image');
            $slider->image = $randVal . time() . $img->getClientOriginalName();
            $img->move(public_path() . '/images/' . 'sliderImage', $slider->image);
        }
        if ($slider->save()) {

            $request->session()->flash('success_msg', 'Staff type Created Successfully');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
        }
        return redirect()->action('Admin\SliderController@index');
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
        $slider = Slider::find($id);

        return view('backend.slider.edit', compact('slider'));
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
        $slider = Slider::find($id);
        $request->validate([
            'title' =>  'required',
            'description'   =>  'required',
            'link'  =>  'required',
            'image' =>  'required',
        ]);

        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->link = $request->link;

        if ($request->hasFile('image')) {
            $sliderImage = ("$this->destination/{$slider->image}"); // get previous image from folder
            if (Slider::exists($sliderImage)) { // unlink or remove previous image from folder
                unlink($sliderImage);
            }
            $randVal = rand(1111, 9999);
            $img = $request->file('image');
            $slider->image = $randVal . time() . $img->getClientOriginalName();
            $img->move($this->destination, $slider->image);
        }
        if ($slider->save()) {

            $request->session()->flash('success_msg', 'Staff type Updated Successfully');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
        }
        return redirect()->action('Admin\SliderController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $slider = Slider::find($id);
        if ($slider->image) {
            if (file_exists($this->destination . '/' . $slider->image)) {
                unlink($this->destination . '/' . $slider->image);
            }
        }
        $slider->delete();
        return redirect()->action('Admin\SliderController@index');
    }
}