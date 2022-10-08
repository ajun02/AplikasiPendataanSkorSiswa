<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengawas;
use App\Kategori;

class PengawasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengawas = Pengawas::all();
        return view('pengawas.index', compact('pengawas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        $kategori= Kategori::all();
        return view('pengawas.tambah',compact('kategori'));   
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
    		'nm_pengawas' => 'required',
            'jenkel' => 'required',
            'no_tlp' => 'required',
            'email' => 'required',
            'password' => 'required',
            'id_kategori' => 'required'
    	]);
 
        Pengawas::create([
    		'nm_pengawas' => $request->nm_pengawas,
            'jenkel' => $request->jenkel,
            'no_tlp' => $request->no_tlp,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'id_kategori' => $request->id_kategori

    	]);
 
    	return redirect('/pengawas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $pengawas = Pengawas::where('id_pengawas',$id)->first();
        return view('pengawas.detail',compact('pengawas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengawas = Pengawas::where('id_pengawas',$id)->first();
        return view('pengawas.edit',compact('pengawas'));
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
            'nm_pengawas' => 'required',
            'jenkel' => 'required',
            'no_tlp' => 'required',
            'email' => 'required',
            'password' => 'required',
            'id_kategori' => 'required'
         ]);
      
         Pengawas::where('id_pengawas',$id)->update([
            'nm_pengawas' => $request->nm_pengawas,
            'jenkel' => $request->jenkel,
            'no_tlp' => $request->no_tlp,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'id_kategori' => $request->id_kategori

        ]);
        
        return redirect('/pengawas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Pengawas::where('id_pengawas',$id)->delete();
        return redirect('/pengawas')->with('Data dihapus','Data berhasil dihapus!');
    }
}
