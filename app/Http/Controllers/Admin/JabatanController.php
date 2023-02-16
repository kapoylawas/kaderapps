<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::All();
        // passing varibel $jabatan  kedalam view.
        return view('admin.jabatan.index', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'kelompok' => 'required',
            'gaji' => 'required'
        ]);
        //insert data $request ke tabel jabatan
        Jabatan::create([
            'name' => $request->name,
            'kelompokjabatan' => $request->kelompok,
            'tarifgaji' => $request->gaji
        ]);
        Session::flash('success', 'Update data berhasil');
        return redirect('admin/jabatan');
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
        $jabatan = Jabatan::find($id);
        return view('admin.jabatan.edit', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'kelompok' => 'required',
            'gaji' => 'required'
        ]);

        $jabatan = Jabatan::find($id);
        $jabatan->name = $request->name;
        $jabatan->kelompokjabatan = $request->kelompok;
        $jabatan->tarifgaji = $request->gaji;
        $jabatan->save();

        Session::flash('success', 'Update data berhasil');
        return redirect('admin/jabatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->delete();

        return redirect('admin/jabatan');
    }
}
