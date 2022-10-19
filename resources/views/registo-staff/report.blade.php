@extends('master.master')

@section('title', 'Report')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Report Staff</h3>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
               Export Exel
              </button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Export PDF
              </button>


            <div class="table-responsive">
                <table class="table text-nowrap" style="font-size:14px;">
                    <thead>
                        <tr style="border-bottom: 2px solid black;font-weight:900;">
                            <th class="border-top-0">N<span><sup><u>0</u></sup></span></th>
                            <th class="border-top-0">Naran Staff</th>
                            <th class="border-top-0">Numero Nis</th>
                            <th class="border-top-0">Nu.El</th>
                            <th class="border-top-0">Nu.Pas</th>
                            <th class="border-top-0">Data Moris</th>
                            <th class="border-top-0">hela Fatin</th>
                            <th class="border-top-0">Fatin Servisu</th>
                            <th class="border-top-0">Posisaun</th>
                            <th class="border-top-0">Data Hahu Servisu</th>
                            <th class="border-top-0">Contrato</th>
                            <th class="border-top-0">Salario</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $staff)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $staff->naran }}</td>
                            <td>{{ $staff->nis }}</td>
                            <td>{{ $staff->eleitoral }}</td>
                            <td>{{ $staff->passaporte }}</td>
                            <td>{{ date('d-F-Y',strtotime($staff->data_moris))}}</td>
                            <td>{{ $staff->naturalidade }}</td>
                            <td>{{ $staff->location->localizada }}</td>
                            <td>{{ $staff->position->posisaun }}</td>
                            <td>{{ $staff->data_servisu }}</td>

                            @if ($staff->contrato== 'indeterminado')

                            <td> <span class="badge bg-info badge-pill ">{{ $staff->contrato}}</span></td>

                            @else
                            <td><span class="badge bg-danger badge-pill badge-danger">{{ $staff->contrato}}</span></td>

                            @endif
                            <td>{{ osan($staff->salario)}}</td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection

