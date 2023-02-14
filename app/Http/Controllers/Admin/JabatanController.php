<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
  /**
   * Handle the incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  // 
  public function __invoke()
  {
    return view('admin.jabatan');
  }
  // public function index()
  // {
  //   return view('admin.jabatan');
  // }

  public function createJabatan()
  {
    return view('admin.inputJabatan');
  }
}