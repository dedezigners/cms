<?php

namespace App\Http\Controllers;

use App\Social;
use App\Setting;
use App\Slide;
use App\Statistic;
use App\Testimonial;
use App\Blog;
use App\Team;
use App\Menu;
use App\Page;
use App\Solution;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')
            ->with('socials', Social::all())
            ->with('menus', Menu::all())
            ->with('setting', Setting::first())

            ->with('slides', Slide::all())
            ->with('solutions', Solution::orderBy('id', 'desc')->take(3)->get())
            ->with('statistics', Statistic::all())
            ->with('testimonials', Testimonial::all())
            ->with('blogs', Blog::orderBy('id', 'desc')->take(4)->get())
            ;
    }


    public function page($slug)
    {
        $getPage = Page::where('page_url', $slug)->first();

        if ($getPage) {
            $pageID = $getPage->id;
            $model = $getPage->page_model;

            if ($slug == "solutions") {
                return view(('templates.' . $model))
                    ->with('socials', Social::all())
                    ->with('menus', Menu::all())
                    ->with('setting', Setting::first())
                    ->with('breadcrumb', true)
    
                    ->with('title', $getPage->title)
                    ->with('sub_title', $getPage->sub_title)
                    ->with('page_intro', $getPage->intro)
                    ->with('solutions', Solution::orderBy('id', 'desc')->get());
                    
            } elseif($slug == "about") {

                return view(('templates.' . $model))
                    ->with('socials', Social::all())
                    ->with('menus', Menu::all())
                    ->with('setting', Setting::first())
                    ->with('breadcrumb', true)
    
                    ->with('statistics', Statistic::all())
                    ->with('title', $getPage->title)
                    ->with('sub_title', $getPage->sub_title)
                    ->with('page_intro', $getPage->intro);
                    
            } elseif($slug == "team") {

                return view(('templates.' . $model))
                    ->with('socials', Social::all())
                    ->with('menus', Menu::all())
                    ->with('setting', Setting::first())
                    ->with('breadcrumb', true)
    
                    ->with('teams', Team::orderBy('id', 'desc')->get())
                    ->with('title', $getPage->title)
                    ->with('sub_title', $getPage->sub_title)
                    ->with('page_intro', $getPage->intro);
                    
            } elseif($slug == "contact") {

                return view(('templates.' . $model))
                    ->with('socials', Social::all())
                    ->with('menus', Menu::all())
                    ->with('setting', Setting::first())
                    ->with('breadcrumb', true)
    
                    ->with('title', $getPage->title)
                    ->with('sub_title', $getPage->sub_title)
                    ->with('page_intro', $getPage->intro);
                    
            } else {

                return view(('templates.' . $model))
                    ->with('socials', Social::all())
                    ->with('menus', Menu::all())
                    ->with('setting', Setting::first())
                    ->with('breadcrumb', true)
    
                    ->with('title', $getPage->title)
                    ->with('sub_title', $getPage->sub_title)
                    ->with('page_intro', $getPage->intro);
            }

        } else {
            abort(404);
        }
    }

}
