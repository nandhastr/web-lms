@extends('layouts.main')

@section('container')
<nav class="navbar bg-body-tertiary" style="box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Tambah Course</span>
  </div>
</nav>

<form action="/simpancourse" method="post">
    {{ csrf_field() }}
    <div class="form-group mt-4 mb-3">
        <label>Id Course:</label>
        <input type="text" name="id_course" class="form-control" required />
    </div>
    <div class="form-group mb-3">
        <label>Subject:</label>
        <input type="text" name="course" class="form-control" required/>
    </div>
    <div class="form-group mb-3">
        <label>Email Dosen:</label>
        <input type="text" name="enrollment_key_dosen" class="form-control" required/>
    </div>
    <div class="form-group mb-3">
        <label>Email Mahasiswa:</label>
        <input type="text" name="enrollment_key_mahasiswa" class="form-control" required/>
    </div>      
    <div class="form-group mb-3">
        <label>Kelas :</label>
        <input type="text" name="kelas" class="form-control" required/>
    </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/course" class="btn btn-primary" role="button">Kembali</a>
</form>

@endsection