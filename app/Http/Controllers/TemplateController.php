<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\project;

class TemplateController extends Controller
{
    //
    function show(){
        $data['profil']=Profil::first();
        $data['project']=project::all();
        return view('template',$data);
    }
}
