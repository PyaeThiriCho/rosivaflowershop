<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.ui.homepage');
    }

    public function detail()
    {
        return view('frontend.ui.detailpage');
    }

     public function occassion()
    {
        return view('frontend.ui.occassionpage');
    }

    public function flower()
    {
        return view('frontend.ui.flowerpage');
    }

     public function review()
    {
        return view('frontend.ui.reviewpage');
    }

    public function contact()
    {
        return view('frontend.ui.contactpage');
    }

     public function cart()
    {
        return view('frontend.ui.cartpage');
    }
}
