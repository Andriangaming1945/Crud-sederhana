<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wakasek;
use Illuminate\Support\Facades\Session;

class WakasekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Wakasek::orderBy('nomor_induk', 'desc')->paginate(5);
        return view('Wakasek/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wakasek/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   


        Session::flash('nomor_induk', $request->nomor_induk);
        Session::flash('nama', $request->nama);
        Session::flash('alamat', $request->alamat);

        $request->validate([
            'nomor_induk' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required'

        ],[
            'nomor_induk.required' => 'Nomor induk wajib disi',
            'nomor_induk.numeric' => 'Nomor induk wajib disi dalam bentuk angka',
            'nama.required' => 'Nama wajib disi',
            'alamat.required' => 'Alamat wajib disi',
        ]);
        $data = [
            'nomor_induk' => $request->input('nomor_induk'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
        ];
        Wakasek::create($data);
        return redirect('wakasek')->with('success', 'Data berhasil di tambahkan');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Wakasek::where('nomor_induk', $id)->first();
        return view('Wakasek/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $data = Wakasek::where('nomor_induk', $id)->first();
        return view('Wakasek/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            
            'nama' => 'required',
            'alamat' => 'required'

        ],[
            
            
            'nama.required' => 'Nama wajib disi',
            'alamat.required' => 'Alamat wajib disi',
        ]);

        $data = [
            'nama' => $request->input('nama'), 
            'alamat' => $request->input('alamat'),
        ];
        wakasek::where('nomor_induk',$id)->update($data);
        return redirect('/wakasek')->with('success','Berhasil ter-update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Wakasek::where('nomor_induk',$id)->delete();
        return redirect('/wakasek')->with('danger','Berhasil meng-hapus');
    }
}
