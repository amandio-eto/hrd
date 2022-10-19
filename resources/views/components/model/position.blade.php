<div class="modal fade" id="posstion" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Aumenta Posisaun</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
              <form action="{{ url('position') }}" method="POST">
                  @csrf
              <div class="input-group input-group-outline mb-3">

                  <input type="text" class="form-control" name="posisaun" placeholder="Posisaun">
                </div>
              @error('position')
              <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
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
