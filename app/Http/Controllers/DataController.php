<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = DB::table('buku')
            ->select('*')
            ->get();
            return view('0264_Tampil' , ['buku' => $buku]);      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        return view('/0264_Tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Menangkap Data Yang Diinput
        $judul = $request->get('judul');
        $tahun_terbit = $request->get('tahun_terbit');
        //Menyimpan data kedalam tabel
        $save_buku = new \App\Models\Data;
        $save_buku->judul = $judul;
        $save_buku->tahun_terbit = $tahun_terbit;
        $save_buku->save();
        return redirect('Tampil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bk_edit = \App\Models\Data::findOrFail($id); 
        return view('/0264_Edit', ['buku' => $bk_edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bk = \App\Models\Data::findOrFail($id); 
        $bk->judul = $request->get('judul'); 
        $bk->tahun_terbit = $request->get('tahun_terbit'); 
        $bk->save();
        return redirect('Tampil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bk = \App\Models\Data::findOrFail($id); 
        $bk->delete();
        return redirect('Tampil');
    }
}
