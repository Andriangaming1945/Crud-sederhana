@extends('layout/aplikasi')

@section('konten')
    <div>
        <a href="/wakasek" class="btn btn-secondary">Kembali</a>
        <h1>Nama : {{$data->nama}}</h1>
        <p>
            <b>Nomor induk :</b> {{$data->nomor_induk}}
        </p>

        <p>
            <b>Alamat : </b> {{$data->alamat}}
        </p>
    </div>
@endsection