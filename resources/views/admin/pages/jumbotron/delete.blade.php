<div class="modal fade" id="delete{{$data->id}}" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
      <form action="/admin-pplg/jumbotron/{{$data->id}}" method="post">
        @csrf
        @method("DELETE")
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Hapus Jumbotron</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Hapus slide ini?</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
            </button>
            <button type="submit" class="btn btn-danger">Save changes</button>
            </div>
        </div>
      </form>
    </div>
  </div>