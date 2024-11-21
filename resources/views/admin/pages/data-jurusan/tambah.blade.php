<div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <form action="/admin-pplg/data-jurusan" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Tambah Jurusan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Nama Jurusan</label>
                        <input type="text" id="nameBasic" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Email</label>
                        <input type="email" id="nameBasic" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Telepon</label>
                        <input type="text" id="nameBasic" class="form-control" name="telp">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Instagram</label>
                        <input type="text" id="nameBasic" class="form-control" name="instagram">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Facebook</label>
                        <input type="text" id="nameBasic" class="form-control" name="facebook">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Twitter</label>
                        <input type="text" id="nameBasic" class="form-control" name="twitter">
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Background</label>
                        <input type="file" id="nameBasic" class="form-control" name="images">
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Link Video Youtube</label>
                        <input type="text" id="nameBasic" class="form-control" name="link_youtube">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                        <label for="emailBasic" class="form-label">Sekolah</label>
                        <select name="school_id" id="" class="form-control">
                            @foreach ($schools as $school)
                            <option value="{{$school->id}}">{{$school->school_name}}</option>
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