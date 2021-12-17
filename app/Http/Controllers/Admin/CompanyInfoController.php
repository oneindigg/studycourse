<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class CompanyInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = CompanyInfo::find(1);
        return view('backend.companyInfo.index', compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.companyInfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $companyInfo = new CompanyInfo();
        $request->validate([
            'name'      =>  'required',
            'slogan'    =>  'required',
            'logo'      =>  'required',
            'email'     =>  'required',
            'phone'     =>  'required',
            'address'   =>  'required',
        ]);

        $companyInfo->name = $request->name;
        $companyInfo->slogan = $request->slogan;
        $companyInfo->logo = $request->logo;
        $companyInfo->email = $request->email;
        $companyInfo->phone = $request->phone;
        $companyInfo->address = $request->address;
        $companyInfo->facebook_link = $request->facebook_link;
        $companyInfo->twitter_link = $request->twitter_link;
        $companyInfo->instagram_link = $request->instagram_link;
        $companyInfo->linkedin_link = $request->linkedin_link;

        if ($companyInfo->save()) {

            $request->session()->flash('success_msg', 'CompanyInfo Created Successfully');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
        }
        return redirect()->action('Admin\CompanyInfoController@index');
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

        $companyInfo = CompanyInfo::find($id);
        $request->validate([
            'name'      =>  'required',
            'slogan'    =>  'required',
            'logo'      =>  'required',
            'email'     =>  'required',
            'phone'     =>  'required',
            'address'   =>  'required',
        ]);

        $companyInfo->name = $request->name;
        $companyInfo->slogan = $request->slogan;
        $companyInfo->logo = $request->logo;
        $companyInfo->email = $request->email;
        $companyInfo->phone = $request->phone;
        $companyInfo->address = $request->address;
        $companyInfo->facebook_link = $request->facebook_link;
        $companyInfo->twitter_link = $request->twitter_link;
        $companyInfo->instagram_link = $request->instagram_link;
        $companyInfo->linkedin_link = $request->linkedin_link;

        if ($companyInfo->save()) {

            $request->session()->flash('success_msg', 'Company Info Updated Successfully');
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
        }
        return redirect()->action('Admin\CompanyInfoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}