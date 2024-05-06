@extends('layouts.main')

@section('container')
<nav class="navbar bg-body-tertiary" style="box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Data Kelas Jurusan Sistem Informasi</span>
  </div>
</nav>

<div class="card mt-4">
    <div class="card-header">
    <a href= "/tambahcourse" class="btn btn-primary" role="button">Tambah Course</a>
    </div>
    <div class="card-body">
      <table id="datatablesSimple">
          <thead>
            <table class="my-3 table table-bordered">
            <tr class="table-primary">
                <th>No</th>
                <th>Id Course</th>
                <th>Course</th>
                <th>Enrollment Key Dosen</th>
                <th>Enrollment Key Mahasiswa</th>
                <th>Kelas</th>
                <th>Partisipan</th>
                <th>Aksi</th>
            </tr>
          </thead>

<tbody>
  @foreach($course as $key => $item)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $item->id_course}}</td>
        <td>{{ $item->course}}</td>
        <td>{{ $item->enrollment_key_dosen}}</td>
        <td>{{ $item->enrollment_key_mahasiswa}}</td>
        <td>{{ $item->kelas}}</td>
        <td>{{ $item->partisipan}}</td>
        <td>
            <!-- Edit Button -->
            <a href="/editcourse/{{ $item->id }}" class="btn btn-sm btn-primary">Edit</a>
            <form action="/hapuscourse/{{ $item->id }}" method="post" style="display: inline;">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
</form>
        </td>
    </tr>
    @endforeach
</tbody>
                                    
@endsection

