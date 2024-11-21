<div class="modal fade" id="edit{{$data->id}}" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
      <form action="/admin-pplg/data-sekolah/{{$data->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Ubah Paket</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="row">
                <div class="col mb-3">
                <label for="nameBasic" class="form-label">Nama Sekolah</label>
                <input type="text" id="nameBasic" value="{{$data->school_name}}" class="form-control" name="school_name">
                </div>
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
            </button>
            <button type="submit" class="btn btn-warning">Save changes</button>
            </div>
        </div>
      </form>
    </div>
  </div>