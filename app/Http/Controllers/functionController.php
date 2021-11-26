<?php

namespace App\Http\Controllers;

use App\Models\card_model;
use App\Models\function_model;
use Illuminate\Http\Request;

class functionController extends Controller
{
    //

    function deleteF(Request $R){
        $recheck=$R->validate(
            [
            'msgIn'=>'required'
            ]
        );
        
        function_model::where('msgIn',$R->msgIn)->delete();
            
        return redirect('/backFun');
    }
   
    function updateF(Request $R){
        $recheck=$R->validate(
            [
            'OmsgIn'=>'required',
            'msgIn'=>'required',
            'msgOut'=>'required',
            'mark'=>'required',
            'sort'=>'required']
        );
        function_model::where('msgIn',$R->OmsgIn)->update(
            [
                'msgIn'=>$R->msgIn,
                'msgOut'=>$R->msgOut,
                'mark'=>$R->mark,
                'sort'=>$R->sort
            ]
            );
        return redirect('/backFun');
    }
    function createF(Request $R){
        $recheck=$R->validate(
            [
            'msgIn'=>'required',
            'msgOut'=>'required',
            'mark'=>'required',
            'sort'=>'required']
        );
        function_model::insert(
            [
                'msgIn'=>$R->msgIn,
                'msgOut'=>$R->msgOut,
                'mark'=>$R->mark,
                'sort'=>$R->sort
            ]
            );
        return redirect('/backFun');
    }
    function show(){
        #report coursemap's name、url
        $cline=(Object)[
            #'coursemap'=>function_model::where('sort',"coursemap")->join("card","message.msgIn","=","card.enter")->select('message.msgIn','card.title','card.text')->get(),
            'richmanu'=>function_model::where('sort',"richmanu")->where('mark','!=','card')->get(),
            'introduce'=>function_model::where('sort',"introduce")->where('mark','!=','card')->get()
        ];
        return view('functionView',[
            'value'=>$cline
        ]);
    }
}
