<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class knownController extends Controller
{
    //
    function question(Request $R){
        return($this->show($R));
     }
    //
    function update(Request $R){
        $ra="";
        $rd="";
        $url="";
        $key="";
        $mg="";
        $send="";
        $kb_id="";
        $soure="";
        $sendA="";
        if($R->Qadd!=""){
            
            $mg=explode("\n",$R->Qadd);
            print_r($mg);
            $ra='"add":[';
            foreach($mg as $e){
            $ra.='"'.$e.'",';
                
            }
            $ra.='],';
            $ra=str_replace("\r",'',$ra);
        }
        if($R->Qdelete!=""){
            
            $mg=explode("\n",$R->Qdelete);
            print_r($mg);
            $rd='
            "delete":[';
            foreach($mg as $e){
            $rd.='"'.$e.'",';
                
            }
            $rd.=']';
            $rd=str_replace("\r",'',$rd);
        }
        $url=' https://nutcqatest.azurewebsites.net/qnamaker/v4.0/knowledgebases/';
        $key="804aedf8-5c97-4cee-b388-0400c255e999";
        $kb_id="29742c04-3343-4c14-82eb-8d24da8f0678";
        
        if($R->A!="")$sendA='"answer": "'.$R->A.'",';
            $quest='PATCH';
            $send='{"update":{
                "qnaList": [
                  {
                    "id": '.$R->id.','.$sendA.'
                    "source": "'.$soure.'",
                    "questions": {'. $ra. $rd.'
                    }
                  }]
                }
             }   ';
        $response=$this->curlGo($url,$kb_id,$key,$quest,$send);

        return redirect("/known");
        #QnA
    }
    function delete(Request $R){
        $r="";
        $url="";
        $key="";
        $mg="";
        $send="";
        $kb_id="";
        $soure="";
       
        $url=' https://nutcqatest.azurewebsites.net/qnamaker/v4.0/knowledgebases/';
        $key="804aedf8-5c97-4cee-b388-0400c255e999";
        $kb_id="29742c04-3343-4c14-82eb-8d24da8f0678";
     
            $quest='PATCH';
            $send='{
                "delete": {
                        
                            "ids": ['.(int)$R->id.'],
                            "sources": ["'.$soure.'"]
                        
                    
                }
            }';
        $response=$this->curlGo($url,$kb_id,$key,$quest,$send);

        return redirect("/known");
        #QnA
    }
    function add(Request $R){
        $r="";
        $url="";
        $key="";
        $mg="";
        $send="";
        $quest='GET';
        $kb_id="";
        if($R->A!=""&&$R->Q!=""){
            
            $mg=explode("\n",$R->Q);
            print_r($mg);
            $r='[';
            foreach($mg as $e){
            $r.='"'.$e.'",';
                
            }
            $r.=']';
            $r=str_replace("\r",'',$r);
            }
            print($r);
            $url=' https://nutcqatest.azurewebsites.net/qnamaker/v4.0/knowledgebases/';
        $key="804aedf8-5c97-4cee-b388-0400c255e999";
        $kb_id="29742c04-3343-4c14-82eb-8d24da8f0678";
            
            if($r!=""){
                $quest='PATCH';
                $send='{
                    "add": {
                        "qnaList": [
                            {
                                "id": 0,
                                "answer": "'.$R->A.'",
                                "questions":'.$r.',
                                "metadata": []
                            }
                        ]
                    }
                }';
            }
        $response=$this->curlGo($url,$kb_id,$key,$quest,$send);
        return  redirect("/known");
        #QnA
    }
    function curlGo($url,$key,$quest,$send){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $quest,
            CURLOPT_POSTFIELDS =>$send,
            CURLOPT_HTTPHEADER => array(
                'Ocp-Apim-Subscription-Key:' . $key,
                'Content-Type: application/json'
                ),
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
    function show(Request $R=null){
        $r="";
        $url="";
        $key="";
        $mg="";
        $send="";
        $quest='GET';
        $kb_id="";
        $url='https://tatest2022.cognitiveservices.azure.com/language/query-knowledgebases/projects/new-project/qnas?api-version=2021-10-01';
        $key="4ed3b8d5359647a984fb757d873e20cc";
        $response=$this->curlGo($url,$key,$quest,$send);
             $re=(array)json_decode($response);
            
            $singleQA=[];
            if($R!=null){
            foreach($re["value"] as $singleQA){
                if($singleQA->id==$R->id){
                    break;
                }
            }
        }
        if($R!=null){
        return view('known',[
            'QAknown'=>$re["value"],
            'Q'=>$singleQA,
            'num'=>$R->num
            ]);
        }else{
        return view('known',[
            'QAknown'=>$re["value"]
            ]);
        }
    }
}
