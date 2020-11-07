<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $slider='on';
        return view('front.index',compact('slider'));
    }

    public function about_us()
    {
        return view('front.about_us');
    }
    public function product_details()
    {
        return view('front.single_product');

    } public function contacts()
    {
        return view('front.contacts');
    }
}
