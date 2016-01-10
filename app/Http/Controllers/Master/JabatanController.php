<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Jabatan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= new Jabatan();
        $tables = $data->TableJabatan();

        return view('Jabatan.index',compact('tables'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Input::get('simpan')){

          $kode_pejabat = $request->input('kode_pejabat');
          $kode_fakultas = $request->input('kode_fakultas');
          $nama_pejabat = $request->input('nama_pejabat');
          $keterangan_jabatan = $request->input('keterangan_jabatan');
          $status_aktif = $request->input('status_aktif');
          $kode_jabatan = $request->input('kode_jabatan');
          $nip = $request->input('nip');
          $nip18 = $request->input('nip18');

          
        }else{
            return redirect('jabatan');
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
        $data = new Jabatan;
        $jabatans = $data->ShowJabatan($id);

        foreach ($jabatans as $key => $jabatan) {
           return view('Jabatan.show',compact('jabatan'));
        }

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
    }
}
