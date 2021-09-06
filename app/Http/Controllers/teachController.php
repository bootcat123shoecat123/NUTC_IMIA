<?php

namespace App\Http\Controllers;

use App\Models\teach_model;
use Illuminate\Http\Request;

class teachController extends Controller
{
    //
    function updateT(Request $R){
        $recheck=$R->validate(['infomation'=>'required','name'=>'required']);
        teach_model::where('name',$R->Oname)->update(
            [
                'infomation'=>$R->infomation,
                'name'=>$R->name
            ]
            );
        return redirect('/backTeach');
    }
    function show(){
        #report coursemap's name、url
        $cline['teach']=teach_model::all();
        return view('teachView',[
            'value'=>$cline
        ]);
    }
}
