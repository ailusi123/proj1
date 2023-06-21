<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function auth(Request $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('home');
        }
        return redirect()->back();
    }
    function logout(){
        
        Auth::logout();
        return redirect('/');

    }
    function show(){
        // $data['user'] = User::orderBy('id','asc')->get();
        // $data['profil'] = Profil::cursorPaginate(2);
        $data['user'] = User::all();
        $data['user'] = User::Paginate(2);
        $data['cari'] = "";
        return view('user', $data);

    }
    function add(){
        $data = [
            'action' => url('user/create'),
            'tombol' => 'simpan',
            'user' => (object)[
                'name' => '',
                'email' =>'',
                'password' => '',
            ]
            ];
            return view('form_user',$data);
    }
    function hapus($id){
        User::where('id',$id)->delete();
        return redirect('user');
    }

    function edit($id){
        $data['user'] = user::find($id);
        $data['action'] = url('user/update').'/'.$data['user']->id;
        $data['tombol'] = "Update";

        return view('form_user',$data);
    }

    function update(Request $request){
        User::where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt ($request->password),
        ]);
        return redirect('user');
    }

    function search(Request $request){
        $data['user'] = user::where('name',$request->cari)->paginate;
        $data['cari'] = $request->cari;

        return view('user',$data);
    }
}