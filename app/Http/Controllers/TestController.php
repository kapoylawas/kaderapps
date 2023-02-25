<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function update(Request $request, Kota $kota)
    {
        // dd($kota);
        $kota->update([
            'name' => $request->name,
        ]);

        // kembali kehalaman admin/kota/index dengan membawa toastr.
        return redirect(route('admin.kota.index'))->with('toast_success', 'Kota Updated');
    }
}
