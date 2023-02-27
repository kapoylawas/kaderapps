<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bank;
use App\Models\Kota;
use App\Models\Biodata;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\BiodataRequest;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodatas = Biodata::with('kecamatans', 'kelurahans')->get();
        return view('admin.biodata.index', compact('biodatas'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kotas = Kota::latest()->paginate(10);
        $kecamatans = Kecamatan::latest()->paginate(10);
        $kelurahans = Kelurahan::latest()->paginate(10);
        $banks = Bank::latest()->paginate(10);
        $biodatas = Biodata::with('kecamatans', 'kelurahans')->get();
        // dd($biodatas);
        return view('admin.biodata.create', compact('biodatas', 'kotas', 'kecamatans', 'kelurahans', 'banks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image',
            'ktp' => 'required',
            'tabungan' => 'required'
        ]);

        $ext = $request->file('foto')->extension();
        $final_name = time() . '.' . $ext;
        $request->file('foto')->move(public_path('images/'), $final_name);
        $request->file('ktp')->move(public_path('ktp/'), $final_name);
        $request->file('tabungan')->move(public_path('tabungan/'), $final_name);
        dd($request);

        Biodata::create([
            'name' => $request,
            'nik' => $request,
            'tempatLahir' => $request,
            'tglLahir' => $request,
            'alamat' => $request,
            'id_kota' => $request,
            'id_kecamatan' => $request,
            'id_kelurahan' => $request,
            'nohp' => $request,
            'norek' => $request,
            'bank' => $request,
            'nohp' => $request,
            'foto' => $final_name,
            'tabungan' => $final_name,
            'ktp' => $final_name,
        ]);
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
