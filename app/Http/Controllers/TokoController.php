<?php

namespace App\Http\Controllers;

use App\toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='toko';
        $toko=toko::paginate(5);
        //dd($toko);
        return view ('admin.toko',compact('title','toko'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input penjual';
        return view('admin.inputtoko',compact('title','toko'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages=[
            'required'=>'Kolom:atribute harus lengkap',
            'date'=>'Kolom:atribute harus Tanggal',
            'numeric'=>'Kolom:atribute harus Angka',
        ];
        $validasi=$request->validate([
            'id_penjual'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
        ],$messages);
        Toko::create($validasi);
        return redirect('toko')->with('succses','Data berhasil diupdate');

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
        $title='Input penjual';
        $toko=Toko::find($id);
        return view('admin.inputtoko',compact('title','toko'));
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
        $messages=[
            'required'=>'Kolom:atribute harus lengkap',
            'date'=>'Kolom:atribute harus Tanggal',
            'numeric'=>'Kolom:atribute harus Angka',
        ];
        $validasi=$request->validate([
            'id_penjual'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
        ],$messages);
        Toko::whereid_penjual($id)->update($validasi);
        return redirect('toko')->with('succses','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Toko::whereid_penjual($id)->delete();
        return redirect('toko')->with('succses','Data berhasil diupdate');  
    }
}
