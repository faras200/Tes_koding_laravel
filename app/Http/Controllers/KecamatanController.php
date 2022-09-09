<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kecamatan.index',[
            'kecamatans' => Kecamatan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kecamatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $validasi = $request->validate([
            'kode' => 'required',
            'nama_kecamatan' => 'required',
            'status' => 'required',
        ]);

        Kecamatan::create($validasi);

        return redirect('/kecamatan')->with('status', 'Berhasil Menambah Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kecamatan $kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kecamatan $kecamatan,Request $request)
    {
        return view('kecamatan.edit',[
            'kecamatan' => Kecamatan::firstwhere('id',$request->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kecamatan $kecamatan)
    {
        $validasi = $request->validate([
            'kode' => 'required',
            'nama_kecamatan' => 'required',
            'status' => 'required',
        ]);

        Kecamatan::where('id', $request->input('id'))->update($validasi);

        return redirect('/kecamatan')->with('status', 'Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Kecamatan $kecamatan)
    {
        Kecamatan::where('id', $request->id)->delete();

        return redirect('/kecamatan')->with('status', 'Berhasil Menghapus Data');
    }
}
