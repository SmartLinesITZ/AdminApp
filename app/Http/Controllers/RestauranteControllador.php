<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Restaurante;


class RestauranteControllador extends Controller
{

  public function index()
  {
    $restaurantes = Restaurante::all();
      return view("resturantes.index",["restaurantes" => $restaurantes]);
  }

  public function create()
  {
  }

  public function store(Request $request)
  {


  }

  public function show($id)
  {
    # code...
  }

  public function edit($id)
  {

  }
  public function update(Request $request, $id)
  {
    # code...
  }
  public function destroy($id)
  {
    # code...
  }
}
