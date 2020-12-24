<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PresentController extends Controller
{
    //
    public function add()
    {
      return view('present.create');
    }

    public function create(){
      return redirect('present/create');
    }

    public function edit(){
      return view('present.edit');
    }

    public function update(){
      return redirect('present/create');
    }

    public function delete(){
      return redirect('present/delete');
    }

    public function index(){
      return view('present.index');
    }

}
