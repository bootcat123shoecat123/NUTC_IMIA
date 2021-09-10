<?php

namespace App\Http\Controllers;

use App\Models\map_model;
use Illuminate\Http\Request;

class mapController extends Controller
{
    function Mupdate(Request $R){
        $recheck=$R->validate(['name'=>'required','url'=>'required']);
        map_model::where('name',$R->name)->update(
            [
                'name'=>$R->name,
                'url'=>$R->url
            ]
            );
            redirect('/backMap');
    }
    function show(){
        #report coursemap's name、url
        $cline=(Object)[
            'IA5'=>map_model::where('name',"like","資應五專%")->get(),
            'IA2'=>map_model::where('name',"like","資應二技%")->get(),
            'IM5'=>map_model::where('name', 'like' ,"五專%")->get(),
            'IM2'=>map_model::where('name', 'like' ,"二技%")->get()
        ];
        return view('mapView',[
            'value'=>$cline
        ]);
    }
    //
}
