@extends('admin.layouts.main')

@section('content')
<div class="card">
    <div class="d-flex justify-content-between align-items-center">
        <h5 class="card-header">Data Jurusan</h5>
        <div class="me-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
                Tambah Jurusan
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
              <th>Nama Jurusan</th>
              <th>Email</th>
              <th>Telepon</th>
              <th>Instagram</th>
              <th>Facebook</th>
              <th>Twitter</th>
              {{-- <th>Background</th> --}}
              <th>Link Video</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($majors as $data)
            <tr>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$data->id}}">
                    <i class="bx bx-pen"></i>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$data->id}}">
                    <i class="bx bx-eraser"></i>
                </button>
              </td>
              <td>{{$loop->iteration}}</td> 
              <td>{{$data->name}}</td>
              <td>{{$data->email}}</td>
              <td>{{$data->telp}}</td>
              <td>{{$data->instagram}}</td>
              <td>{{$data->facebook}}</td>
              <td>{{$data->twitter}}</td>
              {{-- <td>
                <img src="{{asset("images/".$data->bg_image)}}" style="width: 200px" alt="">
              </td> --}}
              <td>{{$data->link_youtube}}</td>
              @include('admin.pages.data-jurusan.edit')
              @include('admin.pages.data-jurusan.delete')
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@include('admin.pages.data-jurusan.tambah')

@endsection