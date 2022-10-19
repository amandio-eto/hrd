@extends('master.master')
@section('title', 'Registo-Staff')
@section('content')

@component('components.model.location')@endcomponent
@component('components.model.position')@endcomponent



<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
           <div class="row">
            <div class="col">
                <div class="btn btn-primary btn-sm"><i class="bi bi-server"></i> new Staff</div>
                <div class="btn btn-info btn-sm" data-toggle="modal" data-target="#posstion"><i class="bi bi-person-workspace"></i> Possition</div>
                <div class="btn btn-info btn-sm"  data-toggle="modal" data-target="#location"><i class="bi sbi-building"></i> Location</div>
            </div>


           </div>
          <div class="card-body">
            <h6 class="card-title text-center" style="text-transform: uppercase"><i class="bi bi-file-text"></i> Dados Staff</h6>

            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      User
                    </th>
                    <th>
                      First name
                    </th>
                    <th>
                      Progress
                    </th>
                    <th>
                      Amount
                    </th>
                    <th>
                      Deadline
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-1">
                      <img src="../../images/faces/face1.jpg" alt="image">
                    </td>
                    <td>
                      Herman Beck
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>
                      $ 77.99
                    </td>
                    <td>
                      May 15, 2015
                    </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

