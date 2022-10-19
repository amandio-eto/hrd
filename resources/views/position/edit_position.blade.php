@extends('master.master')
@section('content')
<div class="row justify-content-center">
<div class="col-lg-6 col-xlg-9 col-md-8">
    <div class="card">

        <div class="card-body">
           <div class="ocl text-center">
            <h4>UPDATE POSISAUN</h4>
           </div>
            <form class="form-horizontal form-material" action="{{ url('/position/edit/'.$edit->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">Posisaun :</label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" value="{{ $edit->posisaun }}" name="posisaun" placeholder="Posisaun" class="form-control p-0 border-0">
                     </div>
                </div>


                <div class="form-group mb-4">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-warning">Send Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection
