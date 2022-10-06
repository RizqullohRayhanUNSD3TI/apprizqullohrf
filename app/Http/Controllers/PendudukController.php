<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Penduduk::all();
        return view('tic.data', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Penduduk;
        return view('tic.input', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambahpenduduk = Penduduk::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'status' => $request->status,
            'pekerjaan' => $request->pekerjaan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'tempat_lahir' => $request->tempatLahir,
            'tanggal_lahir' => $request->tgl_lahir,
            'goldar' => $request->goldar,
        ]);
        if ($tambahpenduduk) {
            return redirect('penduduk/create');
        } else {
            return 'gagal';
        }
        
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
        $model = Penduduk::find($id);
        return view('tic.edit', compact('model'));
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
        $editpenduduk = Penduduk::where('id', $id)->update([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'status' => $request->status,
            'pekerjaan' => $request->pekerjaan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'tempat_lahir' => $request->tempatLahir,
            'tanggal_lahir' => $request->tgl_lahir,
            'goldar' => $request->goldar,
        ]);
        if ($editpenduduk) {
            return redirect('penduduk');
        } else {
            return 'gagal';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapuspenduduk = Penduduk::where('id', $id)->delete();
        if ($hapuspenduduk) {
            return redirect('penduduk');
        } else {
            return 'gagal';
        }
    }
}
