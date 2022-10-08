<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        $kelas= Kelas::all();
        return view('siswa.tambah',compact('kelas'));    
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
    		'nisn' => 'required',
    		'nm_siswa' => 'required',
            'id_kelas' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required', 
    	]);
 
        Siswa::create([
    		'nisn' => $request->nisn,
    		'nm_siswa' => $request->nm_siswa,
            'id_kelas' => $request->id_kelas,
            'tmpt_lahir' => $request->tmpt_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jenkel' => $request->jenkel,
            'alamat' => $request->alamat,
            'score' =>  '100',
    	]);
 
    	return redirect('/siswa')->with('Data ditambah','Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $siswa = Siswa::where('nisn',$id)->first();
        return view('siswa.detail',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idT[9L']
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = \App\Kelas::all();
        $siswa = Siswa::where('nisn',$id)->first();
        return view('siswa.edit',compact('siswa','kelas'));
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
            'nisn' => 'required',
            'nm_siswa' => 'required',
            'id_kelas' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required', 
         ]);
      
         Siswa::where('nisn',$id)->update([
             'nisn' => $request->nisn,
             'nm_siswa' => $request->nm_siswa,
             'id_kelas' => $request->id_kelas,
             'tmpt_lahir' => $request->tmpt_lahir,
             'tgl_lahir' => $request->tgl_lahir,
             'jenkel' => $request->jenkel,
             'alamat' => $request->alamat, 
         ]);

         return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Siswa::where('nisn',$id)->delete();
        return redirect('/siswa')->with('Data dihapus','Data berhasil dihapus!');
    }
}
