@extends('master.master');
@section('content')
<div class="row">
    <div class="col-12">

        <div class="col-md-5 left" style="margin-bottom: 50px;">
            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-outline">

                    <input type="text" class="form-control" placeholder="Buka iha ....">
                    <button class="btn btn btn-secondary  my-2 my-sm-0" type="submit"><i class="bi bi-search"></i></button>
                  </div>

              </form>
        </div>

{{--  ida nee mak Modal 2  --}}

{{--  ida nee mak Rohan Husi Modal 2  --}}

  <div class="card my-4 mt-2">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
      <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
        <h5 class="text-white text-capitalize ps-3" style="text-align: center">{{ $doc->naran_teka}} No.{{ $doc->no_serie }}</h5>
      </div>
    </div>
    <div class="card-body px-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>

            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nu</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Naran Documentos</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" >Descrisaun</th>
             <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data</th>
              <th class="text-secondary opacity-7"></th>
            </tr>
          </thead>
          <tbody>

            @foreach($doc->document as $teka)
            <tr>
              <td>
                <div class="d-flex px-2 py-1">

                  <div class="d-flex flex-column justify-content-center">
                    <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>

                  </div>
                </div>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0">{{ $teka->titlu_documentos }}</p>

              </td>
              <td class="align-middle text-center text-sm">
               <p class="text-xs font-weight-bold mb-0">{{ $teka->descrisaun }}</p>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">{{ date('d-F-Y',strtotime($teka->created_at)) }}</span>
              </td>
              <td class="align-middle">

                <a href="{{ asset('arquivo/'.$teka->documentos) }}" type="button" class="btn btn-info btn-sm" download="">Download</a>
                <a href="{{ url('file/delete/'.$teka->id) }}" type="button" class="btn btn-primary btn-sm">Delete</a>

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
