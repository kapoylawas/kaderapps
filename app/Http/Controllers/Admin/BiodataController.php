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
        $biodatas = Biodata::with('kecamatans', 'kelurahans')->get();
        return view('admin.biodata.index', compact('biodatas'));
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
        // $this->validate($request, [
        //     'name' => 'required',
        //     'nik' => 'required',
        //     'tempatLahir' => 'required',
        //     'tglLahir' => 'required',
        //     'alamat' => 'required',
        //     'kota' => 'required',
        //     'kecamatan' => 'required',
        //     'kelurahan' => 'required',
        //     'nohp' => 'required',
        //     'norek' => 'required',
        //     'bank' => 'required',
        //     'nohp' => 'required',
        //     'tabungan' => 'required',
        //     'ktp' => 'required',
        // ]);
        // dd($request);
        $tabungan = $request->file('tabungan');
        $nama_tabungan =
            $request->file('photo')->getClientOriginalName();

        $tujuan_upload = 'public_path/tabungan';
        $tabungan->move($tujuan_upload, $nama_tabungan);

        $ktp = $request->file('ktp');
        $nama_ktp = time() . "_" . $ktp->getClientOriginalName();

        $tujuan_upload = 'public_path/ktp';
        $ktp->move($tujuan_upload, $nama_ktp);

        $foto = $request->file('foto');
        $nama_foto = time() . "_" . $foto->getClientOriginalName();

        $tujuan_upload = 'public_path/images';
        $foto->move($tujuan_upload, $nama_foto);

        Biodata::create([
            'name' => $request,
            'nik' => $request,
            'tempatLahir' => $request,
            'tglLahir' => $request,
            'alamat' => $request,
            'id_kota' => $request,
            'id_kecamatan' => $request,
            'id_kelurahan' => $request,
            'nohp' => $request,
            'norek' => $request,
            'bank' => $request,
            'nohp' => $request,
            'tabungan' => $nama_tabungan,
            'ktp' => $nama_ktp,
        ]);
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
