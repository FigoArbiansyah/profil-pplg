<div class="modal fade" id="edit{{ $data->id }}" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <form action="/admin-pplg/article/{{ $data->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Ubah Artikel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Author</label>
                            <input type="text" id="nameBasic" value="{{ $data->author }}" class="form-control"
                                name="author">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Tanggal</label>
                            <input type="date" id="nameBasic" value="{{ $data->date }}" class="form-control"
                                name="date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Judul Artikel</label>
                            <input type="text" id="nameBasic" value="{{ $data->title }}" class="form-control"
                                name="title">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Deskripsi</label>
                            <textarea name="description" class="form-control">{{ $data->description }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Gambar</label>
                            <input type="file" id="nameBasic" class="form-control" name="images">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Jurusan</label>
                            <select name="major_id" id="nameBasic" class="form-select">
                                <option value="{{ $data->id }}">Pilih Jurusan</option>
                                @foreach ($majors as $major)
                                    <option value="{{ $major->id }}"
                                        {{ $data->major_id == $major->id ? 'selected' : '' }}>{{ $major->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Jurusan</label>
                            <select name="category_id" id="nameBasic" class="form-select">
                                <option value="{{ $data->id }}">Pilih Jurusan</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $data->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
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
