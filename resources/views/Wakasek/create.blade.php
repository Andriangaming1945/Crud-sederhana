@extends('layout/aplikasi')

@section('konten')
<form method="POST" action="/wakasek">
    @csrf
    <div class="mb-3">
      <label for="nomor_induk" class="form-label">Nomor induk</label>
      <input type="text" class="form-control" name='nomor_induk' id="nomor_induk" value="{{Session::get('nomor_induk')}}" placeholder="Nomor induk">
      
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name='nama' id="nama" value="{{Session::get('nama')}}" placeholder="Nama">
        
      </div>


      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name='alamat' value="{{Session::get('alamat')}}" placeholder="Alamat"></textarea>
        
      </div>

      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
</form>
@endsection