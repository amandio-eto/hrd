<?php

namespace App\Http\Controllers;

use App\identifikasaun;
use App\location;
use App\position;
use App\staff;
use Carbon\Carbon;
use Illuminate\Http\Request;

class staffController extends Controller
{
    public function index(Request $request){

        if($request->has('buka')){
            $staff = staff::where('naran','LIKE','%'.$request['buka'].'%')
                    ->orWhere('phone','LIKE','%'.$request['buka'].'%')->get();
        }else{

            $staff = staff::with('position','location')->get();
        }

        $position = position::orderBy('posisaun')->get();
        $location = location::orderBy('localizada')->get();
        $identifikasaun = identifikasaun::orderBy('identifikasaun')->get();
        $now = Carbon::now();
        $yearMonth = $now->year . $now->month;
        $cek = staff::count();
        if ($cek == 0){
            $urut = 10000001;
            $nomor = 'ETO881'. $yearMonth . $urut;

        }else{
            $ambil = staff::get()->last();
            $urut=(int)substr($ambil->staff_id,-8)+1;
            $nomor = 'ETO881'. $yearMonth. $urut;

        }

        return view('registo-staff.index_staff',compact('staff','position','location','identifikasaun','nomor'));
    }

    public function create(Request $request){

        request()->validate([

            // 'staff_id' => 'required',
            'naran' => 'required|unique:staff,naran',
            'nis' => 'required|unique:staff,nis',
            'identifikasaun' => 'required',
            'nu_identifikasaun' => 'required|numeric',
            'contrato' => 'required',
            'data_moris' => 'required',
            'data_servisu' => 'required',
            'naturalidade' => 'required',
            'phone' => 'required',
            'sexu' => 'required',
            'location_id' => 'required',
            'position_id' => 'required',
            'status' => 'required',
            'salario' => 'required',

        ]);
       staff::create($request->all());
        return back()->with('success','Registo Staff no Success');


    }
    //todo ida nee Mak Delete Husi Database;

    public function delete($id){

        $data = staff::find($id);
        $data->delete($data);
        return back()->with('success','Dados Staff Hamos Ona ho Sucesso');

        {


        }
    }

    //todo ida nee Mak Rohan husi delete

    //? ida nee Mak Update husi Sistema

   public function report(){


    $data = staff::with('location','position')->orderBy('naran','ASC')->get();
    return view('registo-staff.report',compact('data'));
   }
}