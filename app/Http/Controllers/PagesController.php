<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index () {
      $title = 'welcome to Laravel';
      return view('pages.index', compact('title'));
    }
    public function info () {
      $title = 'Welcome to info about ibi8588';
      return view('pages.info')->with('title', $title);;
    }
}
