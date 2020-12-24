<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    //
    public function add()
    {
      return view('address.create');
    }

    public function create(){
      return redirect('address/create');
    }

    public function edit(){
      return view('address.edit');
    }

    public function update(){
      return redirect('address/create');
    }

    public function delete(){
      return redirect('address/delete');
    }

    public function index(){
      return view('address.index');
    }
  }
