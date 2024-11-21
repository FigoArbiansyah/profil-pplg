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
                            <th>Author</th>
                            <th>Tanggal</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Thumbnail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $data)
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#edit{{ $data->id }}">
                                        <i class="bx bx-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#delete{{ $data->id }}">
                                        <i class="bx bx-eraser"></i>
                                    </button>
                                </td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->author }}</td>
                                <td>{{ $data->date }}</td>
                                <td>{!! wordwrap($data->title, 25, "<br>\n") !!}</td>
                                <td>{{ $data->category_name }}</td>
                                <td>{!! wordwrap($data->description, 50, "<br>\n") !!}</td>
                                <td><img src="{{ asset('storage/images/' . $data->images) }}" style="width: 200px" alt="">
                                </td>
                                @include('admin.pages.article.edit')
                                @include('admin.pages.article.delete')
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="py-4">
                {{ $articles->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
    @include('admin.pages.article.tambah')
@endsection
