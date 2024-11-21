<div class="modal fade" id="edit{{$data->id}}" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <form action="/admin-pplg/data-jurusan/{{$data->id}}" method="post">
            @csrf
            @method("PUT")
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Ubah Jurusan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Nama Jurusan</label>
                        <input type="text" id="nameBasic" class="form-control" value="{{$data->name}}" name="name">
                        </div>
                        @error('name')
                            <p class="text-danger text-sm">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Email</label>
                        <input type="email" id="nameBasic" class="form-control" value="{{$data->email}}" name="email">
                        </div>
                        @error('email')
                            <p class="text-danger text-sm">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Telepon</label>
                        <input type="text" id="nameBasic" class="form-control" value="{{$data->telp}}" name="telp">
                        </div>
                        @error('telp')
                            <p class="text-danger text-sm">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Instagram</label>
                        <input type="text" id="nameBasic" class="form-control" value="{{$data->instagram}}" name="instagram">
                        </div>
                        @error('instagram')
                            <p class="text-danger text-sm">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Facebook</label>
                        <input type="text" id="nameBasic" class="form-control" value="{{$data->facebook}}" name="facebook">
                        </div>
                        @error('facebook')
                            <p class="text-danger text-sm">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Twitter</label>
                        <input type="text" id="nameBasic" class="form-control" value="{{$data->twitter}}" name="twitter">
                        </div>
                        @error('twitter')
                            <p class="text-danger text-sm">{{$message}}</p>
                        @enderror
                    </div>
                    {{-- <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Background</label>
                        <input type="file" id="nameBasic" class="form-control" name="images">
                        </div>
                        @error('images')
                            <p class="text-danger text-sm">{{$message}}</p>
                        @enderror
                    </div> --}}
                    <div class="row">
                        <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Link Video Youtube</label>
                        <input type="text" id="nameBasic" class="form-control" value="{{$data->link_youtube}}" name="link_youtube">
                        </div>
                        @error('link_youtube')
                            <p class="text-danger text-sm">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                        <label for="emailBasic" class="form-label">Sekolah</label>
                        <select name="school_id" id="" class="form-control">
                            <option value="{{$data->id}}">Pilih Sekolah</option>
                            @foreach ($schools as $school)
                            <option value="{{$school->id}}" {{$data->school_id == $school->id ? 'selected' : ''}}>{{$school->school_name}}</option>
                            @endforeach
                        </select>
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