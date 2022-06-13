<?php

namespace App\Http\Controllers;

use App\Models\teach_model;
use Illuminate\Http\Request;
use SebastianBergmann\Type\ObjectType;

class teachController extends Controller
{
    //
    function deleteT(Request $R){
        $recheck=$R->validate(
            [
            'name'=>'required'
            ]
        );
        
        teach_model::where('name',$R->name)->delete();
            
        return redirect('/backTeach');
    }
    function createT(Request $R){
        $recheck=$R->validate(
            ['infomation'=>'required','name'=>'required']
        );
        teach_model::insert(
            [
                'infomation'=>$R->infomation,
                'name'=>$R->name
            ]
            );
        return redirect('/backTeach');
    }
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
        
        $cline=(Object)[
            "teach"=>teach_model::all()
        ];
        return view('teachView',[
            'value'=>$cline
        ]);
    }
}
