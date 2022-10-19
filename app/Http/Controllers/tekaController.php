<?php

namespace App\Http\Controllers;

use App\document;
use App\teka;
use Illuminate\Http\Request;

class tekaController extends Controller
{
    public function index(Request $request)
    {

        //todo ida nee mak Search
        if($request->has('buka')){
            $teka = teka::where('naran_teka','LIKE','%'.$request['buka'].'%')
            ->orWhere('no_serie','LIKE','%'.$request['buka'].'%')
            ->orWhere('titlu_teka','LIKE','%'.$request['buka'].'%')
            ->orWhere('descrisaun','LIKE','%'.$request['buka'].'%')->get();

        }else{

            $teka = teka::orderBy('id','DESC')->get();
        }

        return view('teka.index_teka',compact('teka'));

    }

    public function create(Request $request){

        $request->validate([

            'naran_teka' => 'required',
            'cor' => 'required',
            'no_serie' => 'required',
            'titlu_teka' => 'required',
            'descrisaun' => 'required'

        ]);
        teka::create($request->except('id','create_at','updated_at'));
        return back()->with('success','Successo Cria Teka');

    }

    public function delete($id){

        $drop = teka::find($id);
        $drop->delete($id);

        return back()->with('success','Delete Success');
    }


    public function detail(Request $request,$id)
    {


        $doc = teka::find($id);
        return view('teka.detail_teka',compact('doc'));


    }
}
