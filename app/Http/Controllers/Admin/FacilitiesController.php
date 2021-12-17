<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facilities;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facilities::get();
        return view('backend.facilities.index', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.facilities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facility = new Facilities();
        $request->validate([
            'title' =>  'required',
            'link'  =>  'required',
            'icon' =>  'required',
            'description'   =>  'required',
        ]);

        $facility->title = $request->title;
        $facility->link = $request->link;
        $facility->description = $request->description;
        $facility->icon = $request->icon;
        if ($facility->save()) {

            $request->session()->flash('success_msg', 'Facility Created Successfully');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
        }
        return redirect()->action('Admin\FacilitiesController@index');
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
        $facility = Facilities::find($id);
        return view('backend.facilities.edit', compact('facility'));
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
        $facility = Facilities::find($id);
        $request->validate([
            'title' =>  'required',
            'link'  =>  'required',
            'icon' =>  'required',
            'description'   =>  'required',
        ]);

        $facility->title = $request->title;
        $facility->link = $request->link;
        $facility->description = $request->description;
        $facility->icon = $request->icon;

        if ($facility->save()) {

            $request->session()->flash('success_msg', 'Facility updated Successfully');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
        }
        return redirect()->action('Admin\FacilitiesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facility = Facilities::find($id);
        $facility->delete();


        return redirect()->action('Admin\FacilitiesController@index');
    }
}