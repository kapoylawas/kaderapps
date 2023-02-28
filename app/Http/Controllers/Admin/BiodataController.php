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
        $kotas = Kota::latest()->paginate(10);
        $kecamatans = Kecamatan::latest()->paginate(10);
        $kelurahans = Kelurahan::latest()->paginate(10);
        $banks = Bank::latest()->paginate(10);
        $biodatas = Biodata::with('kecamatans', 'kelurahans')->get();
        return view('admin.biodata.index', compact('biodatas', 'kotas', 'kecamatans', 'kelurahans', 'banks'));
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
        // $biodata = new Biodata();
        // $biodata->name = $request->input('name');
        // $biodata->nik = $request->input('nik');
        // // $biodata->tempatLahir = $request->input('tampatLahir');
        // $biodata->tglLahir = $request->input('tglLahir');
        // $biodata->alamat = $request->input('alamat');
        // $biodata->id_kota = $request->input('kota');
        // $biodata->id_kecamatan = $request->input('kecamatan');
        // $biodata->id_kelurahan = $request->input('kelurahan');
        // $biodata->nohp = $request->input('nohp');
        // $biodata->norek = $request->input('norek');
        // $biodata->id_bank = $request->input('bank');
        // $biodata->foto = NULL;
        // $biodata->filektp = null;
        // $biodata->filebukutabungan = null;

        // $biodata->save();

        Biodata::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'tempatLahir' => $request->tempatLahir,
            'tglLahir' => $request->tglLahir,
            'alamat' => $request->alamat,
            'id_kota' => $request->kota,
            'id_kecamatan' => $request->kecamatan,
            'id_kelurahan' => $request->kelurahan,
            'nohp' => $request->nohp,
            'norek' => $request->norek,
            'id_bank' => $request->bank,
            'foto' => $request->foto,
            'filebukutabungan' => $request->tabungan,
            'filektp' => $request->ktp,
        ]);
        //redirect ke halaman create biodata dengan membawa toastr
        return redirect(route('admin.biodata.create'))->with('toast_success', 'Data Created');
    }
    public function simpan(Request $request)
    {
        // $request->validate([
        //     'foto' => 'required|image',
        //     'ktp' => 'required',
        //     'tabungan' => 'required'
        // ]);

        // $ext = $request->file('foto')->extension();
        // $final_name = time() . '.' . $ext;
        // $request->file('foto')->move(public_path('images/'), $final_name);
        // $request->file('ktp')->move(public_path('ktp/'), $final_name);
        // $request->file('tabungan')->move(public_path('tabungan/'), $final_name);
        dd($request);

        // Biodata::create([
        //     'name' => $request,
        //     'nik' => $request,
        //     'tempatLahir' => $request,
        //     'tglLahir' => $request,
        //     'alamat' => $request,
        //     'id_kota' => $request,
        //     'id_kecamatan' => $request,
        //     'id_kelurahan' => $request,
        //     'nohp' => $request,
        //     'norek' => $request,
        //     'bank' => $request,
        //     'nohp' => $request,
        //     'foto' => $final_name,
        //     'tabungan' => $final_name,
        //     'ktp' => $final_name,
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $kotas = Kota::latest()->paginate(10);
        $kecamatans = Kecamatan::latest()->paginate(10);
        $kelurahans = Kelurahan::latest()->paginate(10);
        $banks = Bank::latest()->paginate(10);
        $biodata = Biodata::find($id)->with('kecamatans', 'kelurahans')->get();
        dd($biodata);
        return view('admin.biodata.edit', compact('biodata', 'kotas', 'kecamatans', 'kelurahans', 'banks'));
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
        // dd($biodata);
        $biodata = Biodata::findOrFail($id);
        $biodata->delete();
        // kembali kehalaman sebelumnya dengan membawa toastr.
        return back()->with('toast_success', 'Biodata Deleted');
    }
}
