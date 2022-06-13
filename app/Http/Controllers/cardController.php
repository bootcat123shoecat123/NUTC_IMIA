<?php

namespace App\Http\Controllers;

use App\Models\card_model;
use App\Models\function_model;
use Illuminate\Http\Request;

class cardController extends Controller
{
    //
  
    function updateC(Request $R){
        $recheck=$R->validate(
            [
            'OmsgIn'=>'required',
            'msgIn'=>'required',
            'title'=>'required',
            'text'=>'required']
        );
        card_model::where('enter',$R->OmsgIn)->update(
            [
                'enter'=>$R->msgIn,
                'title'=>$R->title,
                'text'=>$R->text
            ]
            );
        function_model::where('msgIn',$R->OmsgIn)->update(
                [
                    'msgIn'=>$R->msgIn
                ]
                );
        return redirect('/backCard');
    }
    
    function show(){
        #report coursemap's name、url
        $cline=(Object)[
            'coursemap'=>function_model::where('sort',"coursemap")->
            join("card","message.msgIn","=","card.enter")->select('message.msgIn','card.title','card.text')->get(),
            'richmanu'=>function_model::where('sort',"richmanu")->where('mark','=','card')->
            join("card","message.msgIn","=","card.enter")->select('message.msgIn','card.title','card.text')->get(),
            'introduce'=>function_model::where('sort',"introduce")->where('mark','=','card')->
            join("card","message.msgIn","=","card.enter")->select('message.msgIn','card.title','card.text')->get()
        ];
        return view('cardView',[
            'value'=>$cline
        ]);
    }
}
