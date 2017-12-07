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
      return view('pages.info');
    }
}
