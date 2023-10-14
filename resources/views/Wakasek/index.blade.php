@extends('layout/aplikasi')

@section('konten')
    <a href="/wakasek/create" class="btn btn-secondary">Tambah data siswa</a>
    <br>
    <br>
    
    <table class="table">
        <thead>
            <tr>
                <th>Nomor induk  </th>
                <th>Nama</th>
                <th>Alamat </th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->nomor_induk}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td><a class="btn btn-success btn-sm" href='{{url('/wakasek/'.$item->nomor_induk)}}'>Detail</a>
                        <a class="btn btn-primary btn-sm" href='{{url('/wakasek/'.$item->nomor_induk.'/edit')}}'>Edit</a>
                        <form  onsubmit="return confirm('Kamu yakin mau hapus data?')"   class="d-inline"action="{{'/wakasek/'.$item->nomor_induk}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
    {{$data->links()}}
@endsection