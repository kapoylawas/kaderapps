<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Biodata;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Spatie\Permission\Models\Role;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.biodata.index');
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
        $biodatas = Biodata::with('kecamatans', 'kelurahans')->get();
        // dd($biodatas);
        return view('admin.biodata.create', compact('biodatas', 'kotas', 'kecamatans', 'kelurahans'));
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
