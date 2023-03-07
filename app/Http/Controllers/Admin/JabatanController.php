<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JabatanRequest;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $jabatans = Jabatan::latest()->paginate(10);

        // passing varibel $users dan $roles kedalam view.
        return view('admin.jabatan.index', compact('jabatans'));
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
    public function store(JabatanRequest $request)
    {

        // masukan data baru category kedalam database.
        Jabatan::create([
            'name' => $request->name,
            'kelompokjabatan' => $request->kelompokjabatan,
            'tarifgaji' => $request->tarifgaji,
        ]);

        // kembali kehalaman admin/category/index dengan membawa toastr.
        return redirect(route('admin.jabatan.index'))->with('toast_success', 'Jabatan Created');
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
        // passing varibel $jabatan kedalam view.
        return view('admin.jabatan.edit', compact('jabatan'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JabatanRequest $request, Jabatan $jabatan)
    {
        $jabatan->update([
            'name' => $request->name,
            'kelompokjabatan' => $request->kelompokjabatan,
            'tarifgaji' => $request->tarifgaji,
        ]);

        // kembali kehalaman admin/jabatan/index dengan membawa toastr.
        return redirect(route('admin.jabatan.index'))->with('toast_success', 'Jabatan Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jabatan $jabatan)
    {
        // hapus data jabatan berdasarkan id.
        $jabatan->delete();

        // kembali kehalaman sebelumnya dengan membawa toastr.
        return back()->with('toast_success', 'Jabatan Deleted');
    }
}
