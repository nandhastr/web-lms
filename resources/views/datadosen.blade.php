@extends('layouts.main')

@section('container')
<nav class="navbar bg-body-tertiary" style="box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Data Dosen Jurusan Sistem Informasi</span>
  </div>
</nav>

<div class="card mt-4">
  <div class="card-header">
    <a href="/tambahdosen" class="btn btn-primary" role="button">Tambah Data</a>
  </div>
  <div class="card-body">
    <table id="datatablesSimple">
      <thead>
        <table class="my-3 table table-bordered">
          <tr class="table-primary">
            <th>No</th>
            <th>Dosen</th>
            <th>Id Dosen</th>
            <th>Email</th>
            <th>Konsentrasi</th>
            <th>Aksi</th>
          </tr>
      </thead>

      <tbody>
        @foreach($datadosen as $key => $item)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $item->dosen}}</td>
          <td>{{ $item->id_dosen}}</td>
          <td>{{ $item->email}}</td>
          <td>{{ $item->konsentrasi}}</td>
          <td>
            <!-- Edit Button -->
            <a href="/editdosen/{{ $item->id }}" class="btn btn-sm btn-primary">Edit</a>
            <form action="/hapusdosen/{{ $item->id }}" method="post" style="display: inline;">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-sm btn-danger"
                onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>

      @endsection