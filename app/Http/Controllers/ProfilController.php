<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    //
    function show(){
        $data['profil'] = Profil::paginate(2);
        return view('profil', $data);
    }
    function profil(){
        $profil = Profil::first();
        if ($profil){
            $data = [
                'nis' => $profil->nis,
                'name' => $profil->name,
                'alamat' => $profil->alamat,
                'ttl' => $profil->ttl,
                'sekolah' => $profil->sekolah,
                'foto' => $profil->foto,
                'action' => '/profil/edit',$profil->nis
            ];
            return view('profil',$data);
        }else{
            $data = [
                'nis' => '',
                'name' => '',
                'ttl' => '',
                'sekolah' => '',
                'alamat' => '',
                'foto' => '',
                'action' => '/profil/create',
                
                ];
        }
        return view('profil',$data);
    }
    
    function create(Request $request){
        $validate=$this->validate($request,[
            'nis' => 'required|numeric',
            'name' => 'required|string|max:5',
            'alamat' => 'required|string|max:5',
            'ttl' => 'required|string',
            'sekolah' => 'required|string',
            'foto' => 'required|mimes:jpg,png',

        ]);
        $namafile = $request->nis.".".$request->file('foto')->getClientOriginalExtension();
        $validate['foto'] = $request->file('foto')->storeAs('foto',$namafile);
        Profil::create($validate);
        return redirect('profil');
    }
    function edit(){
        $data['profil']= Profil::find($id);
        $data['action'] = url('profil/update')."/".$data['profil']->nis;
        $data['tombol'] = "Update";
        
        return view('profil',$data);
    }
    function update(Request $request){
        $data = Profil::where('nis',$request->nis)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
        }
        Profil::where('nis',$request->nis)->update([
            'nis' => $request->nis,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'sekolah' => $request->sekolah,
            'foto' => $foto,
        ]);
        
        return redirect('profil');
    }

    // function search(Request $request){
    //     $data['profil'] = Profil::where('nis',$request->cari)->orwhere('name',$request->cari)->paginate();
    //    // ->orWhere('nama','like',$request->cari."%")
    //     //->orWhere('jk',$request->cari)
    //     //->paginate();

    //     $data['cari'] = $request->cari;

    //     return view('profil',$data);
    // }

}
