<div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <form action="/admin-pplg/keahlian" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Tambah Keahlian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Icon</label>
                        <input type="text" id="nameBasic" class="form-control" name="icon" placeholder="contoh: fa-solid fa-code">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Judul</label>
                        <input type="text" id="nameBasic" class="form-control" name="title">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Deskripsi</label>
                        <input id="nameBasic" class="form-control" name="description" maxlength="250" >
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                        <label for="emailBasic" class="form-label">Jurusan</label>
                        <select name="major_id" id="" class="form-control">
                            @foreach ($majors as $major)
                            <option value="{{$major->id}}">{{$major->name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
  </div>