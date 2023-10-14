<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //

    function index(){
        return view("halaman/index");
    }

    function tentang(){
        return view("halaman/tentang");
    }

    function kontak(){

        
        $data = [
            'judul' => 'Ini adalah halaman user',
            'kontak' => [
                'nama' => 'Andrian Dwi Putra',
                'nip' => '81234',
                'password' => 'Andriangaming1945'
            ]
        ];
        return view("halaman/kontak")->with($data);
    }
}
