<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterfazPrincipalController extends Controller
{
 public function index()
{
    return view('interfaz-principal');
}

}
