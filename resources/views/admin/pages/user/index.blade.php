@extends('admin.layouts.main')

@section('content')
<div class="card">
    <div class="d-flex justify-content-between align-items-center">
        <h5 class="card-header">Data User</h5>
        <div class="me-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
                Tambah User
            </button>
        </div>
    </div>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Email</th>
              <th>Role</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong>
              </td>
              <td>Albert Cook</td>
              <td>Albert Cook</td>
              <td>Albert Cook</td>
              <td>Admin</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit">
                    <i class="bx bx-pen"></i>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete">
                    <i class="bx bx-eraser"></i>
                </button>
              </td>
              @include('admin.pages.user.edit')
              @include('admin.pages.user.delete')
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>
@include('admin.pages.user.tambah')

@endsection