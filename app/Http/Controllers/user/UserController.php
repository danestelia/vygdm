<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
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
    return view('front.create-user');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {


    $validated = $request->validate([
      'names' => 'required|min:3|max:30|string',
      'apellidos' => 'required|min:5|max:30|string',
      'phone' => 'required|max:10',
      'adreess' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:8|max:15'
    ]);
    User::create($validated);

    return to_route('create.user')->with('success', 'Usuario registrado satisfactoriamente!!!');
  }


  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
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
