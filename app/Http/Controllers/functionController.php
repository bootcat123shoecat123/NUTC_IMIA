<?php

namespace App\Http\Controllers;

use App\Models\function_model;
use Illuminate\Http\Request;

class functionController extends Controller
{
    //
    function updateF(Request $R){
        $recheck=$R->validate(
            ['msgIn'=>'required',
            'msgOut'=>'required',
            'mark'=>'required',
            'sort'=>'required']
        );
        function_model::where('msgIn',$R->Ocode)->update(
            [
                'code'=>$R->code,
                'name'=>$R->name
            ]
            );
        return redirect('/backFun');
    }
    function show(){
        #report coursemap's name、url
        $cline=(Object)[
            'coursemap'=>function_model::where('sort',"coursemap")->get(),
            'richmanu'=>function_model::where('sort',"richmanu")->get(),
            'introduce'=>function_model::where('sort',"introduce")->get()
        ];
        return view('functionView',[
            'value'=>$cline
        ]);
    }
}
