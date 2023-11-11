<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Trabajo;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
          'url' => 'required|image',
          'category' => 'required'
        ]);
        $imagen = $request->file('url')->store('public/images_trabajos');
        $url = Storage::url($imagen);
        $category = $request->category;
        $trabajo = new Trabajo();
        $trabajo->setAttribute('url', $url) ;
        $trabajo->setAttribute('category', $category);
        $trabajo->save();
        return to_route('back.subir-imagen')->with('success', 'La imagen fue subida satisfactoriamente');
    }

    /**
     * Display the specified resource.
     */
    public function showCocinas()
    {
      return DB::table('trabajos')
        ->whereRaw('category = "cocinas"')
        ->orderBy('created_at', 'desc')
        ->get();
    }

  public function showClosets()
  {
    return DB::table('trabajos')
      ->whereRaw('category = "closets"')
      ->orderBy('created_at', 'desc')
      ->get();
  }
  public function showBanios()
  {
    return DB::table('trabajos')
      ->whereRaw('category = "banios"')
      ->orderBy('created_at', 'desc')
      ->get();
  }
  public function showCentros()
  {
    return DB::table('trabajos')
      ->whereRaw('category = "centros"')
      ->orderBy('created_at', 'desc')
      ->get();
  }
  public function showOficina()
  {
    return DB::table('trabajos')
      ->whereRaw('category = "oficinas"')
      ->orderBy('created_at', 'desc')
      ->get();
  }
  public function showVarios()
  {
    return DB::table('trabajos')
      ->whereRaw('category = "varios"')
      ->orderBy('created_at', 'desc')
      ->get();
  }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
