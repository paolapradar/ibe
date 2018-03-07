<?php

namespace Ibe\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
  public function index(){
  }

  public function create(){
    return view('usuario.create');
  }

  public function login(){
    return view('usuario.login');
  }
}
