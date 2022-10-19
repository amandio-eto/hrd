@extends('master.master')
@section('title', 'Dasboard')
@section('content')

    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Salariio </p>
                {{--  <h4 class="mb-0">{{osan($data->sum('salario'))}}</h4>  --}}
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span>ETO Moving Energy Timor-Leste</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Trabalhador ETO Moving</p>
                {{--  <h4 class="mb-0">{{ $data->count() }}</h4>  --}}
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-warning shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Trabalhador ETO-Central</p>
                {{--  <h4 class="mb-0">{{ $location }}</h4>  --}}
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              {{--  <p class="mb-0"><span class="text-danger text-sm font-weight-bolder"></span>Total Salario Trabalhadores ETO-Central <span style="font-weight:900;">{{ osan($osan )}}</span></p>  --}}
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Trabalhador Balide</p>
                {{--  <h4 class="mb-0">{{ $balidestaff }}</h4>  --}}
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              {{--  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Total Salario ETO Balide <span style="font-weight:900;">{{ osan($balide )}}</span></p>  --}}
            </div>
          </div>
        </div>
      </div>

@endsection

