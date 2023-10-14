<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    return view('front.index');
  }

  public function inicio()
  {
    return view('front.inicio');
  }

  public function about()
  {
    return view('front.about');
  }

  public function services()
  {
    return view('front.services');
  }

  public function gallery()
  {
    return view('front.gallery');
  }

  public function blog()
  {
    return view('front.blog');
  }

  public function contact()
  {
    return view('front.contact');
  }
}
