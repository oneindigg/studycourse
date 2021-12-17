<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    protected $destination = 'images/sponsorImage';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsors = Sponsor::orderBy('id', 'DESC')->get();
        return view('backend.sponsors.index', compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sponsors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sponsor = new Sponsor();
        $request->validate([
            'name'  =>  'unique:sponsors|required|min:6|max:20',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ]);

        $sponsor->name = $request->name;
        if ($request->hasFile('image')) {
            $randVal = rand(1111, 9999);
            $img = $request->file('image');
            $sponsor->image = $randVal . time() . $img->getClientOriginalName();
            $img->move($this->destination, $sponsor->image);
        }
        if ($sponsor->save()) {

            $request->session()->flash('success_msg', 'Sponser Created Successfully');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
        }
        return redirect()->action('Admin\SponsorController@index');
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
        $sponsor = Sponsor::find($id);
        return view('backend.sponsors.edit', compact('sponsor'));
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
        $sponsor = Sponsor::find($id);
        $request->validate([
            'name'  =>  'required',
            'image' => 'required',
        ]);

        $sponsor->name = $request->name;
        if ($request->hasFile('image')) {
            $sponsorImage = ("$this->destination/{$sponsor->image}"); // get previous image from folder
            if (Sponsor::exists($sponsorImage)) { // unlink or remove previous image from folder
                unlink($sponsorImage);
            }
            $randVal = rand(1111, 9999);
            $img = $request->file('image');
            $sponsor->image = $randVal . time() . $img->getClientOriginalName();
            $img->move($this->destination, $sponsor->image);
        }
        if ($sponsor->save()) {

            $request->session()->flash('success_msg', 'Sponser Created Successfully');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
        }
        return redirect()->action('Admin\SponsorController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sponsor = Sponsor::find($id);
        if ($sponsor->image) {
            if (file_exists($this->destination . '/' . $sponsor->image)) {
                unlink($this->destination . '/' . $sponsor->image);
            }
        }
        $sponsor->delete();

        return redirect()->back();
    }
}