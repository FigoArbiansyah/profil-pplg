<div class="modal fade" id="edit{{ $data->id }}" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <form action="/admin-pplg/keahlian/{{ $data->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Ubah Keahlian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Icon</label>
                            <input type="text" id="nameBasic" class="form-control" value="{{ $data->icon }}"
                                name="icon">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Judul</label>
                            <input type="text" id="nameBasic" class="form-control" value="{{ $data->title }}"
                                name="title">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Deskripsi</label>
                            <input type="text" id="nameBasic" class="form-control" name="description"
                                value="{{ $data->description }}" maxlength="250">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="emailBasic" class="form-label">Jurusan</label>
                            <select name="major_id" id="" class="form-control">
                                <option value="{{ $data->id }}">Pilih Jurusan</option>
                                @foreach ($majors as $major)
                                    <option value="{{ $major->id }}"
                                        {{ $data->major_id == $major->id ? 'selected' : '' }}>{{ $major->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="emailBasic" class="form-label">Tampilkan Data</label>
                            <select name="is_selected" id="" class="form-select">
                                <option>Pilih Tampilkan</option>
                                <option value="1" {{ $data->is_selected == '1' ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ $data->is_selected == '0' ? 'selected' : '' }}>No</option>
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
