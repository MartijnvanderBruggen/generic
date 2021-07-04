<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class CarouselController extends Controller
{
    public function index() {


      $images = File::files(public_path().'/images/');

      return view('welcome',['images' => $images]);
    }

    public function show(Request $request) {
      dd($request);
    }
}
