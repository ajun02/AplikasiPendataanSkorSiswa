<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penilaian;
use App\Siswa;
use App\Pelanggaran;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penilaian = Penilaian::all();
        $siswa = Siswa::all();
        $pelanggaran = Pelanggaran::all();
        return view('penilaian.index', compact('penilaian','siswa','pelanggaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        $siswa = Siswa::all();
        $pelanggaran = Pelanggaran::all();
        return view('penilaian.tambah', compact('siswa','pelanggaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_pelanggaran = $request->id_pelanggaran;
        $penilaian = Pelanggaran::where('id_pelanggaran', $id_pelanggaran)->first();
        $id_siswa = $request->nisn;
        $siswa = Siswa::where('nisn', $id_siswa)->first();
 
        Penilaian::create([
            'tgl' => $request->tgl,
    		'nisn' => $siswa->nisn,
            'id_pelanggaran' => $request->id_pelanggaran,
            'score' => $penilaian->point
            // $request->all()
    	]);

        $kurang = $siswa->score-$penilaian->point;
            // dd($kurang);

         Siswa::where('nisn', $id_siswa)->update([
          'score' => $kurang
        ]);
 
    	return redirect('/penilaian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $penilaian = Penilaian::where('id_penilaian',$id)->first();
        return view('penilaian.detail',compact('penilaian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penilaian = Penilaian::where('id_penilaian',$id)->first();
        return view('penilaian.edit',compact('penilaian'));
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
            'nisn' => 'required',
            'id_pelanggaran' => 'required',
            'score' => 'required'
         ]);
      
         Penilaian::where('id_penilaian',$id)->update([
            'tgl' => $request->tgl,
            'nisn' => $request->nisn,
            'id_pelanggaran' => $request->id_pelanggaran,
            'score' => $request->score
        ]);

        return redirect('/penilaian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Penilaian::where('id_penilaian',$id)->delete();
        return redirect('/penilaian')->with('Data dihapus','Data berhasil dihapus!');
    }

    public function Cetak()
    {
        return view('Penilaian.cetak');
    }

}
