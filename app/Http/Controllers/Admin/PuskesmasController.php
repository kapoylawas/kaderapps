<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PuskesmasRequest;
use App\Models\Puskesmas;
use Illuminate\Http\Request;

class PuskesmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puskesmas = Puskesmas::latest()->paginate(10);
        //passing data $puskesmas ke view index
        return view('admin.puskesmas.index', compact('puskesmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.puskesmas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PuskesmasRequest $request)
    {
        // masukan data baru category kedalam database.
        Puskesmas::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'tlp' => $request->notelp,
        ]);

        // kembali kehalaman admin/category/index dengan membawa toastr.
        return redirect(route('admin.puskesmas.index'))->with('toast_success', 'Puskesmas Created');
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
        $puskesmas = Puskesmas::find($id);
        // passing varibel $bank kedalam view.
        return view('admin.puskesmas.edit', compact('puskesmas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PuskesmasRequest $request, Puskesmas $puskesmas)
    {
        // dd($request);

        $puskesmas->update([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'tlp' => $request->notelp
        ]);
        dd($puskesmas);
        // kembali kehalaman admin/bank/index dengan membawa toastr.
        return redirect(route('admin.puskesmas.index'))->with('toast_success', 'Puskesmas Updated');
        // dd($puskesmas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puskesmas $request)
    {
        // hapus data jabatan berdasarkan id.
        $request->delete();

        // kembali kehalaman sebelumnya dengan membawa toastr.
        return back()->with('toast_success', 'Puskesmas Deleted');
    }
}
