<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    //
    public function add()
    {
      return view('gift.create');
    }

    public function create(){
      return redirect('gift/create');
    }

    public function edit(){
      return view('gift.edit');
    }

    public function update(){
      return redirect('gift/create');
    }

    public function delete(){
      return redirect('gift/delete');
    }

    public function index(){
      return view('gift.index');
    }
}
