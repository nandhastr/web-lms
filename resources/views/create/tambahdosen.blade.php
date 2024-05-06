@extends('layouts.main')

@section('container')
<nav class="navbar bg-body-tertiary" style="box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Tambah Data Dosen</span>
  </div>
</nav>

<form action="/simpandosen" method="post">
    {{ csrf_field() }}
    <div class="form-group mt-4 mb-3">
        <label>Nama:</label>
        <input type="text" name="dosen" class="form-control" required />
    </div>
    <div class="form-group mb-3">
        <label>Id Dosen:</label>
        <input type="text" name="id_dosen" class="form-control" required/>
    </div>
   <div class="form-group mb-3">
        <label>Email :</label>
        <input type="text" name="email" class="form-control" required/>
    </div>
    <div class="form-group mb-3">
        <label>course :</label>
        <input type="text" name="konsentrasi" class="form-control" required/>
    </div>      
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/datadosen" class="btn btn-primary" role="button">Kembali</a>
</form>

@endsection