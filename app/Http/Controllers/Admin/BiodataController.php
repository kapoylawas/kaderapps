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
        // dd($request->all());
        //ambil nama foto
        $foto = $request->foto;
        $nmfoto = time() . rand(100, 999) . "." . $foto->getClientOriginalExtension();
        //ambil nama tabungan
        $tabungan = $request->tabungan;
        $nmtabungan = time() . rand(100, 999) . "." . $tabungan->getClientOriginalExtension();
        //ambil nama ktp
        $ktp = $request->ktp;
        $nmktp = time() . rand(100, 999) . "." . $ktp->getClientOriginalExtension();

        $simpan = new Biodata;
        $simpan->name = $request->name;
        $simpan->nik = $request->nik;
        $simpan->tempatLahir = $request->tempatLahir;
        $simpan->tglLahir = $request->tglLahir;
        $simpan->alamat = $request->alamat;
        $simpan->id_kota = $request->kota;
        $simpan->id_kecamatan = $request->kecamatan;
        $simpan->id_kelurahan = $request->kelurahan;
        $simpan->nohp = $request->nohp;
        $simpan->norek = $request->norek;
        $simpan->id_bank = $request->bank;
        $simpan->foto = $nmfoto;
        $simpan->filebukutabungan = $nmtabungan;
        $simpan->filektp = $nmktp;
        //pindah file ke directory public
        $foto->move(public_path() . '/foto', $nmfoto);
        $tabungan->move(public_path() . '/tabungan', $nmtabungan);
        $ktp->move(public_path() . '/ktp', $nmktp);
        //simpan data ke tabel biodatas
        $simpan->save();
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
        // dd($id)->all();
        // $biodata = Biodata::find($id)->with(['kotas', 'kecamatans', 'kelurahans'])->get();
        $biodata = Biodata::find($id);
        // dd($biodata);
        return view('admin.biodata.show', compact('biodata'));
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
        $biodata = Biodata::findOrFail($id)->with('kecamatans', 'kelurahans')->get();
        // dd($biodata);
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
