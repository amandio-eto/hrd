<?php

namespace App\Http\Controllers;

use App\position;
use Illuminate\Http\Request;

class positionController extends Controller
{
    public function index(){

        $data = position::all();
        return view('position.index_position',compact('data'));
    }
    public function create(Request $request){

        position::create($request->only('posisaun'));
        return back()->with('success','Sucesso Aumenta ona Posisaun Foun');
    }

    public function edit($id){
        $edit = position::find($id);
        return view('position.edit_position',compact('edit'));

    }
    public function update(Request $request,$id){

        $update = position::find($id);
        $update->update($request->only('posisaun'));
        return redirect('position')->with('success','Update Successo');


    }



    public function delete($id){
        $drop = position::find($id);
       $drop->delete($drop);
        return back()->with('success','Dados Hamos Ona Ho Successo');
    }
}
