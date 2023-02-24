<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bank;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use App\Http\Requests\BankRequest;
use App\Http\Controllers\Controller;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatans = Kecamatan::with('kotas')->get();
        // dd($kelurahans);
        //passing data $kelurahans ke view index
        return view('admin.kecamatan.index', compact('kecamatans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kotas = Kota::latest()->paginate(10);

        return view('admin.kecamatan.create', compact('kotas'));
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
        Kecamatan::create([
            'name' => $request->name,
            'kota_id' => $request->kota
        ]);

        // kembali kehalaman admin/category/index dengan membawa toastr.
        return redirect(route('admin.kecamatan.index'))->with('toast_success', 'Kecamatan Created');
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
        $kotas = Kota::latest()->paginate(10);
        $kecamatan = Kecamatan::find($id);
        // passing varibel $bank kedalam view.
        return view('admin.kecamatan.edit', compact('kecamatan', 'kotas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kecamatan $kecamatan)
    {
        // dd($request);
        $kecamatan->update([
            'name' => $request->name,
            'kota_id' => $request->kota
        ]);

        // kembali kehalaman admin/bank/index dengan membawa toastr.
        return redirect(route('admin.kecamatan.index'))->with('toast_success', 'Kecamatan Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kecamatan $kecamatan)
    {
        // hapus data jabatan berdasarkan id.
        $kecamatan->delete();

        // kembali kehalaman sebelumnya dengan membawa toastr.
        return back()->with('toast_success', 'Kecamatan Deleted');
    }
}
