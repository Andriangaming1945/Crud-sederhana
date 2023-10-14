@extends('layout/aplikasi')

@section('konten')
<h1>{{$judul}}</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam itaque voluptates temporibus sequi beatae rerum porro consequuntur, ullam optio nihil architecto voluptatum. Unde quibusdam totam doloremque! Saepe, facere? Nemo, cum.</p>


<p>
    <ul>
        <li>Nama : {{$kontak['nama']}}</li>
        <li>Nip : {{$kontak['nip']}}</li>
        <li>Password : {{$kontak['password']}}</li>
        
</p>
@endsection


