<?php

namespace App\Http\Controllers;

use App\Models\Wakasek;
use Illuminate\Http\Request;

class WakasekController extends Controller
{
    //
    
    function index(){

        //$data = Wakasek::all();
        $data = Wakasek::orderBy('nomor_induk', 'desc')->paginate(1);
        return view('Wakasek/index')->with('data', $data);
    }

    function detail($id){
        //return "<h1>Saya $id</h1>";
        $data = Wakasek::where('nomor_induk', $id)->first();
        return view('Wakasek/show')->with('data', $data);
    }
}
