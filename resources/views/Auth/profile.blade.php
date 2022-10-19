@extends('master.master')

@section('content')
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('profile/foto') }}" method="POST" enctype="multipart/form-data">
            @csrf
       <input type="file"  name="foto">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Upload Foto</button>
      </div>
    </form>
    </div>
  </div>
</div>
<div class="row">
    <!-- Column -->
    <div class="col-lg-2 col-xlg-3">
        <div class="white-box">
            <div class="bg-secondary">
                <img width="246" height="250" alt="user" src="{{ asset('images/'.auth()->user()->foto) }}">
                <div class="overlay-box mt-2 text-center">

                 <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                        <i class="bi bi-camera-fill"></i>
                     </button>
                </div>
            </div>

        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ url('profile/auth') }}" method="POST" class="form-horizontal form-material">
                    @csrf

                    <div class="form-group mb-4">
                        <label for="example-email" class="col-md-12 p-0">Password Tuan :</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="password"  class="form-control p-0 border-0" name="passwordtuan">
                        </div>
                        @error('passwordtuan')
                        <div class="invalid">
                            <p class="text-danger"> <small> {{ $message }}</small> </p>
                        </div>

                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Password Foun :</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="password"  class="form-control p-0 border-0" name="password">
                        </div>
                        @error('password')
                        <div class="invalid">
                            <p class="text-danger"> <small> {{ $message }}</small> </p>
                        </div>

                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Passwor Comfirmation :</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="password"  class="form-control p-0 border-0" name="password_confirmation">
                        </div>
                        @error('password_comfirmation')
                        <div class="invalid">
                            <p class="text-danger"> <small> {{ $message }}</small> </p>
                        </div>

                        @enderror
                    </div>



                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">Troka Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

@endsection
