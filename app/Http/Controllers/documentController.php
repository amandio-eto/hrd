<?php

namespace App\Http\Controllers;

use App\document;
use Illuminate\Http\Request;

class documentController extends Controller
{
    public function create(Request $request){

        $user = document::create($request->all());
        if ($request->hasFile('documentos')) {
            $request->file('documentos')->move('arquivo/', $request->file('documentos')->getClientOriginalName());
            $user->documentos =  $request->file('documentos')->getClientOriginalName();
            $user->save();
        }

        return back()->with('success','File Trafert Ona Ba Teka ho Sucesso');
    }
    public function delete($id){
        $drop = document::find($id);
        $drop->delete();
        return back()->with('success','Success Delete');
    }
}
