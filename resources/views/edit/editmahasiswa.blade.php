@extends('layouts.main')

@section('container')
<nav class="navbar bg-body-tertiary" style="box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Update Data Mahasiswa</span>
  </div>
</nav>

<form action="/updatemahasiswa/{{ $datamahasiswa->id }}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group mt-4 mb-3">
        <label>NIM:</label>
        <input type="text" name="nim" class="form-control" required />
    </div>
    <div class="form-group mb-3">
        <label>Mahasiswa:</label>
        <input type="text" name="mahasiswa" class="form-control" required/>
    </div>
   <div class="form-group mb-3">
        <label>Email :</label>
        <input type="text" name="email" class="form-control" required/>
    </div>
    <div class="form-group mb-3">
        <label>Program Studi:</label>
        <input type="text" name="program_studi" class="form-control" required/>
    </div> 
    <div class="form-group mb-3">
        <label>Kelas:</label>
        <input type="text" name="kelas" class="form-control" required/>
    </div>  
  
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/datamahasiswa" class="btn btn-primary" role="button">Batal</a>
</form>

@endsection