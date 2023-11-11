<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Trabajo;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\ImagesController;

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
    $trabajoCocinas = new ImagesController();
    $cocinas = $trabajoCocinas -> showCocinas();
    $closets = $trabajoCocinas->showClosets();
    $banios = $trabajoCocinas->showBanios();
    $centros = $trabajoCocinas->showCentros();
    $oficinas = $trabajoCocinas->showOficina();
    $varios = $trabajoCocinas->showVarios();
    return view('front.gallery', compact(
      'cocinas','closets', 'banios', 'centros', 'oficinas', 'varios'));
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
