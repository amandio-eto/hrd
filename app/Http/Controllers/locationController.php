<?php

namespace App\Http\Controllers;

use App\location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class locationController extends Controller
{
    public function index(){

        $data = location::get();
        return view('components.location.index_location',compact('data'));

    }
    public function create(Request $request){

        $request->validate([
            'localizada' => 'required'
        ]);
        location::create($request->only('localizada'));
        return back()->with('success','Sucesso');
    }

    //todo ida nee mak Delete
    public function delete($id)
    {
        $delete = location::find($id);
        $delete->delete($delete);
        return back()->with('success','Success Delete');



    }
    public function edit($id)
    {
        $edit = location::find($id);
        return view('location.edit_location',compact('edit'));



    }

    public function update(Request $request,$id){

        $data = location::find($id);
        $data->update($request->only('localizada'));
        return Redirect('location')->with('success','Success Update');

    }



}