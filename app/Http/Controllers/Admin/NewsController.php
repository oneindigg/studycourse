<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $destination = 'images/newsImage';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id', 'DESC')->get();

        return view('backend.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = News::get();
        return view('backend.news.create', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News();

        $request->validate([
            'title' =>  'required',
            'description'   =>  'required',
            'image' =>  'image',
        ]);

        $news->title  = $request->title;
        $news->description = $request->description;

        if ($request->hasFile('image')) {
            $randVal = rand(1111, 9999);
            $img = $request->file('image');
            $news->image = $randVal . time() . $img->getClientOriginalName();
            $img->move($this->destination, $news->image);
        }
        if ($news->save()) {

            $request->session()->flash('success_msg', 'Staff type Created Successfully');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
        }
        return redirect()->action('Admin\NewsController@index');
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
        $news = News::find($id);
        return view('backend.news.edit', compact('news'));
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
        $news = News::find($id);
        $request->validate([
            'title' =>  'required',
            'description'   =>  'required',
            'image' =>  'required',
        ]);

        $news->title = $request->title;
        $news->description = $request->description;

        if ($request->hasFile('image')) {
            $newsImage = ("$this->destination/{$news->image}"); // get previous image from folder
            if (news::exists($newsImage)) { // unlink or remove previous image from folder
                unlink($newsImage);
            }
            $randVal = rand(1111, 9999);
            $img = $request->file('image');
            $news->image = $randVal . time() . $img->getClientOriginalName();
            $img->move($this->destination, $news->image);
        }
        if ($news->save()) {

            $request->session()->flash('success_msg', 'Staff type Updated Successfully');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
        }
        return redirect()->action('Admin\NewsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        if ($news->image) {
            if (file_exists($this->destination . '/' . $news->image)) {
                unlink($this->destination . '/' . $news->image);
            }
        }
        $news->delete();
        session()->flash('message', 'Deleted Successfully ');
        return redirect()->back();
    }
}