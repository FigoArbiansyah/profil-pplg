@extends('admin.layouts.main')

@section('content')
<div class="card">
    <div class="d-flex justify-content-between align-items-center">
        <h5 class="card-header">Data Sekolah</h5>
        <div class="me-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
                Tambah Data Sekolah
            </button>
        </div>
    </div>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Sekolah</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($datas as $data)
            <tr>
              <td>
                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong>
              </td>
              <td>{{$data->school_name}}</td> 
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$data->id}}">
                    <i class="bx bx-pen"></i>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$data->id}}">
                    <i class="bx bx-eraser"></i>
                </button>
              </td>
              @include('admin.pages.data-sekolah.edit')
              @include('admin.pages.data-sekolah.delete')
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@include('admin.pages.data-sekolah.tambah')

@endsection