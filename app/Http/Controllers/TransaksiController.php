<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('transaksi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'tgl' => 'required',
            'id_siswa' => 'required',
            'id_kelas' => 'required',
            'id_pelanggaran' => 'required',
            'score' => 'required'
    	]);
 
        Transaksi::create([
    		'tgl' => $request->tgl,
            'id_siswa' => $request->id_siswa,
            'id_kelas' => $request->id_kelas,
            'id_pelanggaran' => $request->id_pelanggaran,
            'score' => $request->score
    	]);
 
    	return redirect('/transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $transaksi = Transaksi::where('id_transaksi',$id)->first();
        return view('transaksi.detail',compact('transaksi')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::where('id_transaksi',$id)->first();
        return view('transaksi.edit',compact('transaksi'));

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
        $this->validate($request,[
            'tgl' => 'required',
            'id_siswa' => 'required',
            'id_kelas' => 'required',
            'id_pelanggaran' => 'required',
            'score' => 'required'
         ]);
      
         Transaksi::where('id_transaksi',$id)->update([

            'tgl' => $request->tgl,
            'id_siswa' => $request->id_siswa,
            'id_kelas' => $request->id_kelas,
            'id_pelanggaran' => $request->id_pelanggaran,
            'score' => $request->score
        ]);

        return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Transaksi::where('id_transaksi',$id)->delete();
        return redirect('/transaksi');
    }
}
