<?php

namespace App\Http\Controllers;

use App\Models\function_model;
use Illuminate\Http\Request;

class functionController extends Controller
{
    //
    function updateO(Request $R){
        $recheck=$R->validate(['Ocode'=>'required','code'=>'required','name'=>'required']);
        function_model::where('code',$R->Ocode)->update(
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
            'function'=>function_model::all()
        ];
        return view('idView',[
            'value'=>$cline
        ]);
    }
}
