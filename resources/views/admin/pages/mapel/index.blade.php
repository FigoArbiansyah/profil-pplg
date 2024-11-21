@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-header">Data Mata Pelajaran</h5>
            <div class="me-4">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
                    Tambah Mata Pelajaran
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
                            <th>Name Mapel</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mapels as $data)
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
                                <td>{{ $data->name }}</td>
                                @include('admin.pages.mapel.edit')
                                @include('admin.pages.mapel.delete')
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.pages.mapel.tambah')
@endsection
