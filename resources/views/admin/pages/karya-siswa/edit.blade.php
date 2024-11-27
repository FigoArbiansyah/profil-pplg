<div class="modal fade" id="edit-{{ $item->id }}" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <form action="/admin-pplg/karya-siswa/{{ $item->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Edit Karya Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="student_name" class="form-label">Nama Siswa</label>
                            <input type="text" id="student_name" class="form-control" name="student_name" value="{{ old('student_name', $item->student_name) }}" required>
                            @error('student_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="student_image" class="form-label">Foto Siswa</label>
                            <input type="file" id="student_image" class="form-control" name="student_image">
                            @error('student_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="title" class="form-label">Judul Karya</label>
                            <input type="text" id="title" class="form-control" name="title" value="{{ old('title', $item->title) }}" required>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea name="description" id="description" class="form-control" required>{{ old('description', $item->description) }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="company_name" class="form-label">Nama Tempat Magang (Optional)</label>
                            <input type="text" id="company_name" class="form-control" name="company_name" value="{{ old('company_name', $item->company_name) }}">
                            @error('company_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <input type="file" id="thumbnail" class="form-control" name="thumbnail">
                            @error('thumbnail')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="yt_embed_url" class="form-label">YouTube Embed URL</label>
                            <input type="text" id="yt_embed_url" class="form-control" name="yt_embed_url" value="{{ old('yt_embed_url', $item->yt_embed_url) }}" required>
                            @error('yt_embed_url')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="student_instagram_url" class="form-label">Instagram Siswa (Optional)</label>
                            <input type="text" id="student_instagram_url" class="form-control" name="student_instagram_url" value="{{ old('student_instagram_url', $item->student_instagram_url) }}">
                            @error('student_instagram_url')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="student_linkedin_url" class="form-label">LinkedIn Siswa (Optional)</label>
                            <input type="text" id="student_linkedin_url" class="form-control" name="student_linkedin_url" value="{{ old('student_linkedin_url', $item->student_linkedin_url) }}">
                            @error('student_linkedin_url')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="student_github_url" class="form-label">GitHub Siswa (Optional)</label>
                            <input type="text" id="student_github_url" class="form-control" name="student_github_url" value="{{ old('student_github_url', $item->student_github_url) }}">
                            @error('student_github_url')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Tutup
                    </button>
                    <button type="submit" class="btn btn-warning">Perbarui</button>
                </div>
            </div>
        </form>
    </div>
</div>
