<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //

    function index()
    {
        $title = '';
        return view('demo.index', compact('title'));
    }

    function news()
    {
        $title = 'News';
        return view('demo.news', compact('title'));
    }
    function singlenews()
    {
        $title = 'News';
        return view('demo.singlenews', compact('title'));
    }

    function aboutus()
    {
        $title = 'About Us';
        return view('demo.aboutus', compact('title'));
    }

    function services()
    {
        $title = 'Services';
        return view('demo.services', compact('title'));
    }
    function contact()
    {
        $title = 'Contact Us';
        return view('demo.contact', compact('title'));
    }

    function contactus()
    {
        $title = 'Contact Us';
        return view('demo.contactus', compact('title'));
    }
    function report()
    {
        $title = 'Report';
        return view('demo.report ', compact('title'));
    }
    function experience()
    {
        $title = 'Experience';
        return view('demo.experience ', compact('title'));
    }
}
