<div class="modal fade" id="edit{{ $data->id }}" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <form action="/admin-pplg/category/{{ $data->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Ubah Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Nama Kategori</label>
                            <input type="text" id="nameBasic" value="{{ $data->name }}" class="form-control"
                                name="name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Jurusan</label>
                            <select name="major_id" id="" class="form-select">
                                <option value="{{ $data->id }}">Pilih Jurusan</option>
                                @foreach ($majors as $major)
                                    <option value="{{ $major->id }}"
                                        {{ $data->major_id == $major->id ? 'selected' : '' }}>{{ $major->name }}
                                    </option>
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
