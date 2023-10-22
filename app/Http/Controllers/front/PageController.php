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
  }   public function cocinas()
  {
    return view('front.second-page.cocinas');
  }
  public function closets()
  {
    return view('front.second-page.closets');
  }
  public function centrosEntretenimiento()
  {
    return view('front.second-page.centros');
  }
  public function banios()
  {
    return view('front.second-page.baños');
  }
  public function oficina()
  {
    return view('front.second-page.oficinas');
  }
}
