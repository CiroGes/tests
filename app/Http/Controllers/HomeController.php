<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

  public function index() {
      if (true) {
          return view('index');
      }
  }

  public function form() {
    return view('form');
  }

  public function store(Request $request) {
    $text = $request->text;
    return view('result')->with('text', $text);
  }
}
