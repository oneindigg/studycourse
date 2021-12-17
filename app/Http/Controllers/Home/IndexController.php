<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use App\Models\Courses;
use App\Models\Facilities;
use App\Models\News;
use App\Models\PageInfo;
use App\Models\Slider;
use App\Models\Sponsor;
use App\Models\Staffs;
use App\Models\Testimonial;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        $new = News::latest('id')->first();
        $news = News::latest('id')->where('id', '!=', $new->id)->paginate('2');
        $staffs = Staffs::paginate('4');
        $courses = Courses::latest('id')->paginate('3');
        $testimonials = Testimonial::get();
        $facilities = Facilities::get();
        $sponsors = Sponsor::get();

        $pageInfoFacilities = PageInfo::where('slug', 'facilities')->first();
        $pageInfoStaff = PageInfo::where('slug', 'staffs')->first();

        return view('frontend.home.index', compact('sliders', 'news', 'new', 'staffs', 'courses', 'facilities', 'testimonials', 'sponsors', 'pageInfoStaff', 'pageInfoFacilities'));
    }

    public function courses()
    {
        $courses = Courses::get();

        return view('frontend.courses', compact('courses'));
    }

    public function contact()
    {
        return view('frontend.home.contact');
    }

    public function about()
    {
        //
    }
}