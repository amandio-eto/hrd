<!-- Modal -->
<div class="modal fade" id="location" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="staticBackdropLabel">Registo Location/Lokasi Staff</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div class="form-group">
    <form action="{{ url('location') }}" method="POST">
        @csrf
         <div class="input-group input-group-outline mb-3">

        <input type="text" class="form-control" name="localizada" placeholder="New Location Staff">
        @error('localizada')
        <div class="invalid">
            <p> <small class="text-danger">{{ $message }}</small></p>
        </div>

        @enderror
      </div>


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
