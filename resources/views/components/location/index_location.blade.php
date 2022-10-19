@extends('master.master')

@section('content')
<div class="container-fluid py-4">
<div class="row">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible text-white" role="alert">
        <span class="text-sm">{{ session('success') }}</span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif


<div class="col-12">
<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#location">
<i class="bi bi-plus-circle"></i> Location
</button>
@component('components.model.location')
@endcomponent
<div class="card my-4">
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
  <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
    <h6 class="text-white text-capitalize ps-3" style="text-align:center;">Registo Locatio/Lokasi Staff</h6>
  </div>
</div>
<div class="card-body px-0 pb-2">
  <div class="table-responsive p-0">
    <table class="table align-items-center justify-content-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N<sup><u>0</u></sup></th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Location Staff</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Data</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Aksaun</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $lokasi)
        <tr>
            <td>
                <p class="text-sm font-weight-bold mb-0">{{ $loop->iteration }}</p>
            </td>
            <td>
                <p class="text-sm font-weight-bold mb-0" style="text-transform:uppercase;">{{ $lokasi->localizada }}</p>
            </td>
            <td>
                <span class="text-xs font-weight-bold">{{ date('d-F-Y',strtotime($lokasi->created_at)) }}</span>
            </td>
            <td class="align-middle text-center">
                <a href="{{ url('location/edit/'.$lokasi->id) }}"><i class="bi bi-pencil-square text-warning"></i></a> |
                <a href="{{ url('location/delete/'.$lokasi->id) }}"><i class="bi bi-trash3 text-danger"></i></a>

            </td>

        </tr>
        @endforeach







      </tbody>
    </table>
  </div>
</div>
</div>
</div>
</div>




</div>

@endsection

