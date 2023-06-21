<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class ProjectController extends Controller
{
    //
    function show(){
        $data['project'] = project::all();
        return view('project',$data);
    }
    function add(){
        $data = [
            'action' => url('project/create'),
            'tombol' => 'Simpan',
            'project' => (object)[
                'name_project' => '',
                'kategori' => '',
                'deskripsi' => '',
                'foto' => ''
            ]
            ];
            return view ('form_project',$data);
    }
    function create(Request $request){
        project::create([
            'name_project' => $request->name_project,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->file('foto')->store('foto')
        ]);
        return redirect('project');
    }
    function hapus($id){
        project::where('id',$id)->delete();
        return redirect('project');
    }
    function edit($id){
        $data['project'] = project::find($id);
        $data['action'] = url('project/update').'/'.$data['project']->id;
        $data['tombol'] = 'update';
        return view ('form_project',$data);
    }
    function update(Request $request){
        project::where('id',$request->id)->update([
            'name_project' => $request->name_project,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            // 'foto' => $request->file('foto')->store('foto')
        ]);
        return redirect ('project');
    }
}