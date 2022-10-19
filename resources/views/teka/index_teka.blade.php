@extends('master.master')
@section('content')
<div class="row">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible text-white" role="alert">
        <span class="text-sm">{{ session('success') }}</span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif

    {{--  ida nee Mak teka2  --}}
    <!-- Modal -->
<div class="modal fade" id="file" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Arquivo Ba Teka</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('file') }}" method="POST" enctype="multipart/form-data">
            @csrf

        <div class="input-group input-group-outline mb-3">

            <div class="input-group input-group-outline mb-3">
                <input type="text" class="form-control" name="titlu_documentos" placeholder="Titlu Documentos">
            </div>
            @error('titlu_documentos')
            <div class="invalid">
                <p> <small class="text-danger">{{ $message }}</small></p>
            </div>
            @enderror



            <select class="form-control" name="teka_id">
                <option value="cheese">--Favor Hili Teka-- </option>
                @foreach ($teka as $data)
                <option value="{{ $data->id }}">{{ $data->naran_teka }}</option>
                @endforeach
            </select>
        </div>
        @error('teka_id')
        <div class="invalid">
            <p> <small class="text-danger">{{ $message }}</small></p>
        </div>
        @enderror

        <div class="input-group input-group-outline mb-3">
            <input type="text" class="form-control" name="descrisaun" placeholder="Descrisaun">
        </div>
        @error('descrisaun')
        <div class="invalid">
            <p> <small class="text-danger">{{ $message }}</small></p>
        </div>
        @enderror
        <div class="input-group input-group-outline mb-3">
            <input type="file" class="form-control" name="documentos" >
        </div>
        @error('documentos')
        <div class="invalid">
            <p> <small class="text-danger">{{ $message }}</small></p>
        </div>
        @enderror




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Taka</button>
        <button type="submit" class="btn btn-success">Send</button>
      </div>
    </form>
    </div>
  </div>
</div>


<div class="col-12">
<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop">
    <i class="bi bi-journals"></i> Cria Teka
</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#file">
    <i class="bi bi-file-earmark-plus-fill text-white"></i> Upload file
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="staticBackdropLabel" style="text-align:center"><i class="bi bi-journal"></i> Cria Teka </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">×</span>
</button>


</div>

<div class="modal-body">
<div class="form-group">
    <form action="{{ url('teka') }}" method="POST">
        @csrf
         <div class="input-group input-group-outline mb-3">

        <input type="text" class="form-control" name="naran_teka" placeholder="Naran Teka">

         </div>
         @error('naran_teka')
         <div class="invalid">
             <p> <small class="text-danger">{{ $message }}</small></p>
         </div>
         @enderror

         <div class="input-group input-group-outline mb-3">

            <select class="form-control" name="cor">
                <option value="cheese">--Favor Hili Teka-- </option>
                <option value="1">Teka Cor Kinur</option>
                <option value="2">Teka Cor Azul</option>
                <option value="3">Teka Cor Mean</option>
                <option value="4">Teka Cor Chocolate </option>
                <option value="5">Teka Cor verde</option>
            </select>
        </div>
        @error('cor')
        <div class="invalid">
            <p> <small class="text-danger">{{ $message }}</small></p>
        </div>
        @enderror

                <div class="input-group input-group-outline mb-3">

                <input type="text" class="form-control" name="no_serie" placeholder="Numero Serie Teka">
                 </div>
                 @error('no_serie')
                 <div class="invalid">
                     <p> <small class="text-danger">{{ $message }}</small></p>
                 </div>
                 @enderror

                     <div class="input-group input-group-outline mb-3">
                    <input type="text" class="form-control" name="titlu_teka" placeholder="Titlo Documentos">
                     </div>
                     @error('titlu_teka')
                     <div class="invalid">
                         <p> <small class="text-danger">{{ $message }}</small></p>
                     </div>
                     @enderror
                     <div class="input-group input-group-outline mb-3">
                        <input type="text" class="form-control" name="descrisaun" placeholder="Descrisaun">
                    </div>
                    @error('descrisaun')
                    <div class="invalid">
                        <p> <small class="text-danger">{{ $message }}</small></p>
                    </div>
                    @enderror


</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Taka</button>
<button type="submit" class="btn btn-success">Send</button>
</div>
</form>

</div>
</div>
</div>
    <div class="col-12">

            <div class="col-md-5 left" style="margin-bottom: 50px;">
                <form class="form-inline my-2 my-lg-0" action="{{ url('teka') }}" method="GET">
                    <div class="input-group input-group-outline">

                        <input type="text" name="buka" class="form-control" placeholder="Buka iha ....">
                        <button class="btn btn btn-secondary  my-2 my-sm-0" type="submit"><i class="bi bi-search"></i></button>
                      </div>

                  </form>
            </div>

      <div class="card my-4 mt-2">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
            <h5 class="text-white text-capitalize ps-3" style="text-align: center">Teka Eletronico</h5>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Naran Teka</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Descrisaun</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Documentos</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($teka as $data)
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                       @if ($data->cor == 1)
                       <a href="{{ url('teka/detail/'.$data->id) }}"><img src="{{ asset('folder/Yellow.jpg') }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user2"></a>
                       @elseif($data->cor==2)
                      <a href="{{ url('teka/detail/'.$data->id) }}"> <img src="{{ asset('folder/biru.png') }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user2"></a>
                       @elseif($data->cor==3)
                        <a href="{{ url('teka/detail/'.$data->id) }}"><img src="{{ asset('folder/red.png') }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user2"></a>
                        @elseif($data->cor ==4 )
                       <a href="{{ url('teka/detail/'.$data->id) }}"> <img src="{{ asset('folder/ubuntu.png') }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user2"></a>
                        @else
                        <a href="{{ url('teka/detail/'.$data->id) }}"><img src="{{ asset('folder/green.png.webp') }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user2"></a>
                       @endif
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{ $data->naran_teka }}</h6>
                        <p class="text-xs text-secondary mb-0">No.{{ $data->no_serie }}</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $data->titlu_teka }}</p>
                    <p class="text-xs text-secondary mb-0">{{ $data->descrisaun }}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                   <p>{{ $data->document->count() }}</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ date('d-F-Y',strtotime($data->created_at)) }}</span>
                  </td>
                  <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        <i class="bi bi-pencil-square text-warning"></i>
                    </a> |
                    <a href="{{ url('teka/delete/'.$data->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        <i class="bi bi-trash3 text-danger"></i>
                    </a>
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

@endsection
