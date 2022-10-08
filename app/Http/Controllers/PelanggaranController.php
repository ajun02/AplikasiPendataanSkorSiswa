<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggaran;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggaran = Pelanggaran::all();
        return view('pelanggaran.index', compact('pelanggaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('pelanggaran.tambah');
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
    		'nm_pelanggaran' => 'required',
            'point' => 'required'
    	]);
 
        Pelanggaran::create([
    		'nm_pelanggaran' => $request->nm_pelanggaran,
            'point' => $request->point
            // $request->all()
    	]);
 
    	return redirect('/pelanggaran')->with('Data ditambah','Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $pelanggaran = Pelanggaran::where('id_pelanggaran',$id)->first();
        return view('pelanggaran.detail',compact('pelanggaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggaran = Pelanggaran::where('id_pelanggaran',$id)->first();
        return view('pelanggaran.edit',compact('pelanggaran'));
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
            'nm_pelanggaran' => 'required',
            'point' => 'required'
         ]);
      
         Pelanggaran::where('id_pelanggaran',$id)->update([
            'nm_pelanggaran' => $request->nm_pelanggaran,
            'point' => $request->point
        ]);

        return redirect('/pelanggaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Pelanggaran::where('id_pelanggaran',$id)->delete();
        return redirect('/pelanggaran')->with('Data dihapus','Data berhasil dihapus!');
    }
}
