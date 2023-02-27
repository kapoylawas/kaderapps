<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
            tampung seluruh data user kedalam variabel $users, disini
            kita juga menambahkan method search dan multiSearch
            yang kita dapatkan dari sebuah trait hasScope, selanjutnya
            kita pecah data user yang kita tampilkan hanya 10 per halaman
            dengan urutan terbaru.
        */
        $users = User::with('roles')
            ->search('name')->multiSearch('roles', 'name')
            ->latest()
            ->paginate(10)
            ->withQueryString();

        // tampung seluruh data role kedalam variabel $roles.
        $roles = Role::get();

        // passing varibel $users dan $roles kedalam view.
        return view('admin.user.index', compact('users', 'roles'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // kita update data user role sesuai request yang diberikan.
        $user->syncRoles($request->roles);

        // kembali kehalaman sebelumnya dengan membawa toastr.
        return back()->with('toast_success', 'User Role Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // hapus data user berdasarkan id.
        $user->delete();

        // kembali kehalaman sebelumnya dengan membawa toastr.
        return back()->with('toast_success', 'User Deleted');
    }

    public function profile(Request $request)
    {
        // tampung data user yang sedang login kedalam variabel $user.
        $user = $request->user();

        // passing varibel $user kedalam view.
        return view('admin.user.profile', compact('user'));
    }

    public function profileUpdate(Request $request, User $user)
    {
        // update data user bedasarkan id tanpa melakukan update avatar.
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'github' => $request->github,
            'instagram' => $request->instagram,
            'about' => $request->about,
        ]);

        // cek apakah user mengirimkan request file avatar.
        if($request->file('avatar')){
            // hapus avatar user sebelumnya.
            Storage::disk('local')->delete('public/avatar/'.basename($user->avatar));
            // tampung request file avatar kedalam variabel $avatar.
            $avatar = $request->file('avatar');
            // request yang telah kita tampung kedalam variabel kita masukan kedalam folder public/avatar.
            $avatar->storeAs('public/avatar/', $avatar->hashName());
            // update data user avatar.
            $user->update([
                'avatar' => $avatar->hashName(),
            ]);
        }

        // kembali kehalaman sebelumnya dengan membawa toastr.
        return back()->with('toast_succes', 'Profile Updated');
    }

    public function updatePassword(Request $request, User $user)
    {
        // validasi request password sebelum kita masukan kedalam database.
        $request->validate([
            'password' => 'confirmed|required|min:6',
        ]);

        // kita lakukan pengecekan apakah password yang lama sesuai dengan password yang kita masukan.
        if(!(Hash::check($request->get('current_password'), $user->password))){
            // kembali kehalaman sebelumnya dengan sebuah toastr.
            return back()->with('toast_error', 'Your Old Password Wrong');
        }else{
            // update data password user bedasarkan id.
            $user->update([
                'password' => Hash::make($request->get('password')),
            ]);
        }

        // kembali kehalaman sebelumnya dengan sebuah toastr.
        return back()->with('toast_success', 'Password Changed');
    }
}
