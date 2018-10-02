<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function avtopark(){
        return view('avtopark');
    }
}
