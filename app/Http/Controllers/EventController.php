<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //create add edit updete delete index

    public function add()
    {
      return view('event.create');
    }

    public function create(){
      return redirect('event/create');
    }

    public function edit(){
      return view('event.edit');
    }

    public function update(){
      return redirect('event/create');
    }

    public function delete(){
      return redirect('event/delete');
    }

    public function index(){
      return view('event.index');
    }
}
