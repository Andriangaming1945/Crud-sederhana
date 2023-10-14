@extends('layout/aplikasi')

@section('konten')

<a href="/wakasek" class="btn btn-secondary">Kembali</a>
<form method="post" action="{{'/wakasek/'.$data->nomor_induk}}">
    @csrf
    @method('put')
    <div class="mb-3">
        <h1>Nomor induk : {{$data->nomor_induk}}</h1>
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name='nama' id="nama" value="{{$data->nama}}" placeholder="Nama">
        
      </div>


      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name='alamat' placeholder="Alamat">{{$data->alamat}}</textarea>
        
      </div>

      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
</form>
@endsection