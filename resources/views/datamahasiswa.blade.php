@extends('layouts.main')

@section('container')
<nav class="navbar bg-body-tertiary" style="box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Data Mahasiswa Jurusan Sistem Informasi</span>
  </div>
</nav>

<div class="card mt-4">
  <div class="card-header">
    <a href="/tambahmahasiswa" class="btn btn-primary" role="button">Tambah Data</a>
  </div>
  <div class="card-body">
    <table id="datatablesSimple">
      <thead>
        <table class="my-3 table table-bordered">
          <tr class="table-primary">
            <th>No</th>
            <th>Mahasiswa</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Program Studi</th>
            <th>Kelas</th>
            <th>Aksi</th>
          </tr>
      </thead>

      <tbody>
        @foreach($datamahasiswa as $key => $item)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $item->mahasiswa}}</td>
          <td>{{ $item->nim}}</td>
          <td>{{ $item->email}}</td>
          <td>{{ $item->program_studi}}</td>
          <td>{{ $item->kelas}}</td>
          <td>
            <!-- Edit Button -->
            <a href="/editmahasiswa/{{ $item->id }}" class="btn btn-sm btn-primary">Edit</a>
            <form action="/hapusmahasiswa/{{ $item->id }}" method="post" style="display: inline;">
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