<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staffs;
use Illuminate\Http\Request;

class StaffController extends Controller
{

    protected $destination = 'images/staffImage';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staffs::get();
        return view('backend.staffs.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staff = new Staffs();
        $request->validate([
            'name'  =>  'required',
            'designation'   => 'required',
            'facebook_link' =>  'required',
            'twitter_link'  =>  'required',
            'image'         =>  'required',
        ]);

        $staff->name = $request->name;
        $staff->designation = $request->designation;
        $staff->facebook_link = $request->facebook_link;
        $staff->twitter_link = $request->twitter_link;

        if ($request->hasFile('image')) {
            $randVal = rand(1111, 9999);
            $img = $request->file('image');
            $staff->image = $randVal . time() . $img->getClientOriginalName();
            $img->move($this->destination, $staff->image);
        }
        if ($staff->save()) {

            $request->session()->flash('success_msg', 'Staff type created Successfully');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
        }
        return redirect()->action('Admin\StaffController@index');
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
        $staff = Staffs::find($id);
        return view('backend.staffs.edit', compact('staff'));
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
        $staff = Staffs::find($id);

        $request->validate([
            'name'  =>  'required',
            'designation'   => 'required',
            'facebook_link' =>  'required',
            'twitter_link'  =>  'required',
            'image'         =>  'required',
        ]);

        $staff->name = $request->name;
        $staff->designation = $request->designation;
        $staff->facebook_link = $request->facebook_link;
        $staff->twitter_link = $request->twitter_link;

        if ($request->hasFile('image')) {
            $staffImage = ("$this->destination/{$staff->image}"); // get previous image from folder
            if (Staffs::exists($staffImage)) { // unlink or remove previous image from folder
                unlink($staffImage);
            }
            $randVal = rand(1111, 9999);
            $img = $request->file('image');
            $staff->image = $randVal . time() . $img->getClientOriginalName();
            $img->move($this->destination, $staff->image);
        }
        if ($staff->save()) {

            $request->session()->flash('success_msg', 'Staff type Updated Successfully');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
        }
        return redirect()->action('Admin\StaffController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staffs::find($id);

        if ($staff->image) {
            if (file_exists($this->destination . '/' . $staff->image)) {
                unlink($this->destination . '/' . $staff->image);
            }
        }
        $staff->delete();
        session()->flash('message', 'Deleted Successfully ');
        return redirect()->action('Admin\StaffController@index');
    }
}