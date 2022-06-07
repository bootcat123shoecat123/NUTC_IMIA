<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class phonecontroller extends Controller
{
    function question(Request $R){
        return($this->show($R));
     }
    //
    function update(Request $R){
        
        $rq="";
        $url="";
        $key="";
        $mg="";
        $send="";
        $kb_id="";
        $sendA="";
        if($R->Qadd!=""){
            
            $mg=explode("\n ",$R->ttlQ);
            print_r($mg);
            foreach($mg as $e){
            $rq.='"'.$e.'",';
            }

            $rq.='"'.$R->Qadd.'"';

            $rq=str_replace("\r",'',$rq);
        }elseif($R->Qdelete!=""){
            
            $mg=explode("\n ",$R->ttlQ);
            print_r($mg);
            foreach($mg as $e){
                if($e!=$R->Qdelete)$rq.='"'.$e.'",';
                
            }
            $rq=str_replace("\r",'',$rq);
        }else{
            $mg=explode("\n ",$R->ttlQ);
            print_r($mg);
            foreach($mg as $e){
                $rq.='"'.$e.'",';
                }
        }
            
     
            $url='https://tatest2022.cognitiveservices.azure.com/language/query-knowledgebases/projects/new-project/qnas?api-version=2021-10-01';
            $key="4ed3b8d5359647a984fb757d873e20cc";
            $soure="Editorial";
        
            $quest='PATCH';
            $send='[{
                
                    "op": "replace",
                    "value": {
                    "id": '.$R->id.',
                    "answer": "'.$R->A.'",
                      "source": "'.$soure.'",
                      "questions": ['.$rq.'
                      ]
                    }
                }
             }] ';
        $response=$this->curlGo($url,$key,$quest,$send);

        return redirect("/phone");
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
       
        $url='https://tatest2022.cognitiveservices.azure.com/language/query-knowledgebases/projects/new-project/qnas?api-version=2021-10-01';
            $key="4ed3b8d5359647a984fb757d873e20cc";
            $soure="Editorial";
            
            $quest='PATCH';
            $send='[{
                "op": "delete",
                "value": {
                  "id": '.$R->id.',
                  "source": "'.$soure.'"
                }
              }]';
        $response=$this->curlGo($url,$key,$quest,$send);

        return redirect("/phone");
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
        $soure="Editorial";
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
           
            $url='https://tatest2022.cognitiveservices.azure.com/language/query-knowledgebases/projects/new-project/qnas?api-version=2021-10-01';
            $key="4ed3b8d5359647a984fb757d873e20cc";
            
        
            if($r!=""){
                $quest='PATCH';
                $send='{
                    "op": "add",
                    "value": {
                                "answer": "'.$R->A.'",
                                "source": "'.$soure.'",
                                "questions":'.$r.'
                            }
                        ]
                    }
                }';
            }
        $response=$this->curlGo($url,$key,$quest,$send);
        return  redirect("/phone");
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
                'Ocp-Apim-Subscription-Key:4ed3b8d5359647a984fb757d873e20cc',
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
        return view('phoneView',[
            'QAphone'=>$re["value"],
            'Q'=>$singleQA,
            'num'=>$R->num
            ]);
        }elseif(isset($re["value"])){
        return view('phoneView',[
            'QAphone'=>$re["value"]
            ]);
        }else{
            view('error',[
                'error'=>$re
                ]);
        }
    
    }
   
}
