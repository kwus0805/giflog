
<?php

  //eventに紐づくeventごとのグループを扱うコントローラー

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function add()
    {
      return view('group.create');
    }

    public function create(){
      return redirect('group/create');
    }

    public function edit(){
      return view('group.edit');
    }

    public function update(){
      return redirect('group/create');
    }

    public function delete(){
      return redirect('group/delete');
    }

    public function index(){
      return view('group.index');
    }
}
