<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Biodata;
use App\Models\Jabatan;
use App\Models\Riwayatjabatan;
use App\Models\Sk;

class SKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sk = Riwayatjabatan::with('getSk', 'biodata', 'kecamatans', 'kelurahans')->get();
        return view('admin.SK.index', compact('sk'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $biodatas = Biodata::latest()->paginate(10);
        $jabatans = Jabatan::latest()->paginate(10);
        $kecamatans = Kecamatan::latest()->paginate(10);
        $kelurahans = Kelurahan::latest()->paginate(10);
        return view('admin.SK.input', compact('jabatans', 'biodatas', 'kecamatans', 'kelurahans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $sk = $request->filesk;
        $nmsk = time() . rand(100, 999) . "." . $sk->getClientOriginalExtension();
        // masukan data baru sks kedalam database.
        $simpansk = new Sk;
        $simpansk->nosk = $request->sk;
        $simpansk->tglskp = $request->tgl;
        $simpansk->file = $nmsk;

        $sk->move(public_path() . '/sk', $nmsk);

        $simpansk->save();
        // masukan data baru sks kedalam database.
        Riwayatjabatan::create([
            'tahun' => $request->tahun,
            'id_jabatan' => $request->jabatan,
            'id_sk' => $simpansk->id,
            'biodata_id' => $request->id,
            'id_kelurahan' => $request->kelurahan,
            'id_kecamatan' => $request->kecamatan,
        ]);

        // kembali kehalaman admin/category/index dengan membawa toastr.
        return redirect(route('admin.sk.index'))->with('toast_success', 'SK Created');
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
        dd($id);
        $riwayatjabatan = Riwayatjabatan::findOrFail($id);
        $riwayatjabatan->delete();
        // kembali kehalaman sebelumnya dengan membawa toastr.
        return back()->with('toast_success', 'SK Deleted');
    }
}