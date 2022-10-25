<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategori::all();
        return view('kategori.index', compact('kategori'),[
            'title'=>'kategori'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kategori.create',[
            'title'=>'kategori']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validated =$request->validate([
            'nama'=>'required',
            'keterangan'=>'required',
        ],[
            'nama.required'=>'nama harus di isi',
            'keterangan.required'=>'keterangan harus di isi'
        ]);
        $kategori = new kategori();
        $kategori->nama=$request->nama;
        $kategori->keterangan=$request->keterangan;
        $kategori->save();
        return redirect()->route('kategori.index',[
            'title'=>'kategori'])->with('success', 'Data berhasil di buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(kategori $id)
    {
         $kategori = kategori::findOrFail($id);
        return view('kategori.show',[
            'title'=>'kategori'], compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori $id)
    {
         $kategori = kategori::findOrFail($id);
        return view('kategori.edit',[
            'title'=>'kategori'], compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategori $id)
    {
         $validated =$request->validate([
            'nama'=>'required',
            'katerangan'=>'required',
        ]);
        $kategori = kategori::findOrFail($id);
        $kategori->nama=$request->nama;
        $kategori->keterangan=$request->keterangan;
        $kategori->save();
        return redirect()->route('kategori.index',[
            'title'=>'kategori'])->with('success', 'Data berhasil edit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori $id)
    {
        $kategori = kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index',[
            'title'=>'kategori'])->with('danger', 'Data berhasil di hapus !');
    }
}
