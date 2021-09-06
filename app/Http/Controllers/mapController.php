<?php

namespace App\Http\Controllers;

use App\Models\map_model;
use Illuminate\Http\Request;

class mapController extends Controller
{
    function update(Request $R){
        $recheck=$R->validate(['name'=>'required','url'=>'required']);
    }
    function show(){
        #report coursemap's name、url
        $cline['資應']=map_model::where('name',"資應%")->all();
        $cline['資管']=map_model::where('name', '!=' ,"資應%")->orWhereNull('name')->all();
        return view('',[
            'value'=>$cline
        ]);
    }
    //
}
