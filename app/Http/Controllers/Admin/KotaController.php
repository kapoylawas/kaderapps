<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bank;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use App\Http\Requests\BankRequest;
use App\Http\Controllers\Controller;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kotas = Kota::latest()->paginate(10);
        // dd($kelurahans);
        //passing data $kelurahans ke view index
        return view('admin.kota.index', compact('kotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kotas = Kota::latest()->paginate(10);

        return view('admin.kota.create', compact('kotas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // masukan data baru category kedalam database.
        Kota::create([
            'name' => $request->name
        ]);

        // kembali kehalaman admin/category/index dengan membawa toastr.
        return redirect(route('admin.kota.index'))->with('toast_success', 'Kota Created');
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
        $kota = Kota::find($id);
        // passing varibel $bank kedalam view.
        return view('admin.kota.edit', compact('kota'));
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
        // dd($request->all());
        $kota = Kota::findOrFail($id);
        // dd($kota);
        $kota->update([
            'name' => $request->name,
        ]);

        // kembali kehalaman admin/kota/index dengan membawa toastr.
        return redirect(route('admin.kota.index'))->with('toast_success', 'Kota Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // hapus data kota berdasarkan id.
        // dd($id);
        $kota = Kota::findOrFail($id);
        $kota->delete();
        // kembali kehalaman sebelumnya dengan membawa toastr.
        return back()->with('toast_success', 'Kota Deleted');
    }
}
