<?php

namespace App\Http\Controllers;

use App\Models\build_model;
use App\Models\id_model;
use Illuminate\Http\Request;

class idController extends Controller
{
    //
    function updateB(Request $R){
        $recheck=$R->validate(
            ['Ocode'=>'required',
            'code'=>'required',
            'name'=>'required',
            'campus'=>'required'
            ]
        );
        build_model::where('code',$R->Ocode)->update(
            [
                'code'=>$R->code,
                'name'=>$R->name,
                'campus'=>$R->campus
            ]
            );
            
        return redirect('/backID');
    }
    function updateO(Request $R){
        $recheck=$R->validate(['Ocode'=>'required','code'=>'required','name'=>'required']);
        id_model::where('code',$R->Ocode)->update(
            [
                'code'=>$R->code,
                'name'=>$R->name
            ]
            );
        return redirect('/backID');
    }
    function show(){
        #report coursemap's name、url
        $cline['office']=id_model::all();
        $cline['building']=build_model::all();
        return view('idView',[
            'value'=>$cline
        ]);
    }
}
