<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use DB;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $karyawan = Karyawan::all();
        return view('karyawan.index',compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $karyawan = Karyawan::all();
        return view('karyawan.create',compact('karyawan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $karyawan = new Karyawan();
        $karyawan->nama = $request->a;
        $karyawan->kategori = $request->b;
        $karyawan->status_karyawan = $request->c;
        $karyawan->lemari = $request->d;
        $karyawan->posisi = $request->e;
        $karyawan->jumlah = $request->f;
        $karyawan->satuan = $request->g;
        $karyawan->save();

        return redirect('karyawan');
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
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.show',compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.edit',compact('karyawan'));
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
        //
         $karyawan = Karyawan::findOrFail($id);
       $karyawan->nama = $request->a;
        $karyawan->kategori = $request->b;
        $karyawan->status_karyawan = $request->c;
        $karyawan->lemari = $request->d;
        $karyawan->posisi = $request->e;
        $karyawan->jumlah = $request->f;
        $karyawan->satuan = $request->g;
        $karyawan->save();

        return redirect('karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        //
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();
        return redirect('karyawan');
    }

   public function search(Request $request)
   {
    $cari=$request->get('nama');
    $hasil = Karyawan::where('nama','Like','%'.$cari.'%')->paginate(10);
    return view('karyawan.hasil',compact('cari','hasil'));
   }

   public function pivot()
   {
    $karyawan = Karyawan::select("status_karyawan,COUNT(status_karyawan) as jumlah from Karyawan group by status_karyawan");
    return view('karyawan.pivot',compact('karyawan'));
   }
}
