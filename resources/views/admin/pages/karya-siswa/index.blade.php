@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-header">Data Artikel</h5>
            <div class="me-4">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
                    Tambah Data Artikel
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Aksi</th>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Foto Siswa</th>
                            <th>Nama Karya</th>
                            <th>Deskripsi</th>
                            <th>Nama Tempat Magang</th>
                            <th>Thumbnail</th>
                            <th>YouTube Embed Url</th>
                            <th>Instagram Siswa</th>
                            <th>LinkedIn Siswa</th>
                            <th>Github Siswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studentPortfolios as $item)
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#edit-{{ $item->id }}">
                                        <i class="bx bx-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#delete{{ $item->id }}">
                                        <i class="bx bx-eraser"></i>
                                    </button>
                                </td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->student_name }}</td>
                                <td><img src="{{ asset('storage/images/' . $item->student_image) }}" style="width: 100px" alt="">
                                </td>
                                <td>{!! wordwrap($item->title, 25, "<br>\n") !!}</td>
                                <td>{!! wordwrap($item->description, 50, "<br>\n") !!}</td>
                                <td>{{ $item->company_name }}</td>
                                <td><img src="{{ asset('storage/images/' . $item->thumbnail) }}" style="width: 200px" alt="">
                                </td>
                                <td>
                                    <iframe width="200" height="100" src="{{ $item->yt_embed_url }}" frameborder="0" allowfullscreen></iframe>
                                </td>
                                <td>
                                    @if($item->student_instagram_url)
                                        <a href="{{ $item->student_instagram_url }}" target="_blank">Instagram</a>
                                    @endif
                                </td>
                                <td>
                                    @if($item->student_linkedin_url)
                                        <a href="{{ $item->student_linkedin_url }}" target="_blank">LinkedIn</a>
                                    @endif
                                </td>
                                <td>
                                    @if($item->student_github_url)
                                        <a href="{{ $item->student_github_url }}" target="_blank">GitHub</a>
                                    @endif
                                </td>
                                @include('admin.pages.karya-siswa.edit')
                                @include('admin.pages.karya-siswa.delete')
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="py-4">
                {{ $studentPortfolios->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
    @include('admin.pages.karya-siswa.tambah')
@endsection
