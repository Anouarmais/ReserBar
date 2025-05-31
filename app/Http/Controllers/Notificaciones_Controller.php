<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Notificaciones_Controller extends Controller
{
 public function index()
{
    return view('notificaciones');
}

}