<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankRequest;
use App\Models\Bank;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelurahans = Kelurahan::with('kecamatans')->get();
        // dd($kelurahans);
        //passing data $kelurahans ke view index
        return view('admin.kelurahan.index', compact('kelurahans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatans = Kecamatan::latest()->paginate(10);

        return view('admin.kelurahan.create', compact('kecamatans'));
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
        Kelurahan::create([
            'name' => $request->name,
            'kecamatan_id' => $request->kecamatan
        ]);

        // kembali kehalaman admin/category/index dengan membawa toastr.
        return redirect(route('admin.kelurahan.index'))->with('toast_success', 'Kelurahan Created');
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
        $kecamatans = Kecamatan::latest()->paginate(10);
        $kelurahan = Kelurahan::find($id);
        // passing varibel $bank kedalam view.
        return view('admin.kelurahan.edit', compact('kelurahan', 'kecamatans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelurahan $kelurahan)
    {
        $kelurahan->update([
            'name' => $request->name,
            'kecamatan_id' => $request->kecamatan
        ]);

        // kembali kehalaman admin/bank/index dengan membawa toastr.
        return redirect(route('admin.kelurahan.index'))->with('toast_success', 'Kelurahan Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelurahan $kelurahan)
    {
        // hapus data jabatan berdasarkan id.
        $kelurahan->delete();

        // kembali kehalaman sebelumnya dengan membawa toastr.
        return back()->with('toast_success', 'Kelurahan Deleted');
    }
}
