@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-header">Data Pengajar</h5>
            <div class="me-4">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
                    Tambah Data Pengajar
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
                            <th>Gambar</th>
                            <th>Banner</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $data)
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
                                <td><img src="{{ asset('storage/images/' . $data->images) }}" style="width: 130px" alt="">
                                </td>
                                <td><img src="{{ asset('storage/images/' . $data->banner) }}" style="width: 200px" alt="">
                                </td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->description }}</td>
                                @include('admin.pages.pengajar.edit')
                                @include('admin.pages.pengajar.delete')
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.pages.pengajar.tambah')
@endsection
