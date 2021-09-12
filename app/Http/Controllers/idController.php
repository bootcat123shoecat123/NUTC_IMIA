<?php

namespace App\Http\Controllers;

use App\Models\build_model;
use App\Models\id_model;
use Illuminate\Http\Request;

class idController extends Controller
{
    //
    function createB(Request $R){
        $recheck=$R->validate(
            [
            'code'=>'required',
            'name'=>'required',
            'campus'=>'required'
            ]
        );
        build_model::insert(
            [
                'code'=>$R->code,
                'name'=>$R->name,
                'campus'=>$R->campus
            ]
            );
        return redirect('/backID');
    }
    function createO(Request $R){
        $recheck=$R->validate(
            ['Ocode'=>'required','code'=>'required','name'=>'required']
        );
        id_model::insert(
            [
                'code'=>$R->code,
                'name'=>$R->name
            ]
            );
        return redirect('/backID');
    }
    function deleteB(Request $R){
        $recheck=$R->validate(
            [
            'code'=>'required'
            ]
        );
        
        build_model::where('code',$R->code)->delete();
            
        return redirect('/backID');
    }
    function deleteO(Request $R){
        $recheck=$R->validate(
            [
            'code'=>'required'
            ]
        );
        
        id_model::where('code',$R->code)->delete();
            
        return redirect('/backID');
    }
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
        $cline=(Object)[
            'office'=>id_model::all(),
            'building'=>build_model::all()
        ];
        return view('idView',[
            'value'=>$cline
        ]);
    }
}
