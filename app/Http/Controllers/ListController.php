<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index(){
        return view('index');
    }
    public function create(){
        return view('create');
    }
    public function edit(){
        return view('edit');
    }
}
