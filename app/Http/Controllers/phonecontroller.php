<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class phonecontroller extends Controller
{
    function question(Request $R){
        return($this->show($R->id));
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
            
     
            $url='https://nutc.cognitiveservices.azure.com/qnamaker/v4.0/knowledgebases/';
            $key="71d073f160924eb6b45b21cb2960b486";
            $kb_id="eef1b7fe-64eb-41df-821c-2ac57c853477";
            if ($R->id<=64)$soure="0802ebc6-a0c2-41ad-9a10-3d8f3d3a2fdb-Kb.tsv";
            else $soure="Custom Editorial";
        
        if($R->A!="")$sendA='"answer": "'.$R->A.'",';
            $quest='PATCH';
            $send='{"update":{
                "name": "QnA Maker + Emotion API FAQ Bot",
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
       
        
            $url='https://nutc.cognitiveservices.azure.com/qnamaker/v4.0/knowledgebases/';
            $key="71d073f160924eb6b45b21cb2960b486";
            $kb_id="eef1b7fe-64eb-41df-821c-2ac57c853477";
            if ($R->id<=64)$soure="0802ebc6-a0c2-41ad-9a10-3d8f3d3a2fdb-Kb.tsv";
            else $soure="Custom Editorial";
     
            $quest='PATCH';
            $send='{
                "delete": {
                        
                            "ids": ['.(int)$R->id.'],
                            "sources": ["'.$soure.'"]
                        
                    
                }
            }';
        $response=$this->curlGo($url,$kb_id,$key,$quest,$send);

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
           
                $url='https://nutc.cognitiveservices.azure.com/qnamaker/v4.0/knowledgebases/';
                $key="71d073f160924eb6b45b21cb2960b486";
                $kb_id="eef1b7fe-64eb-41df-821c-2ac57c853477";
            
            if($r!=""){
                $quest='PATCH';
                $send='{
                    "add": {
                        "qnaList": [
                            {
                                "id": 0,
                                "answer": "'.$R->A.'",
                                "source": "Custom Editorial",
                                "questions":'.$r.',
                                "metadata": []
                            }
                        ]
                    }
                }';
            }
        $response=$this->curlGo($url,$kb_id,$key,$quest,$send);
        return  redirect("/phone");
        #QnA
    }
    function curlGo($url,$kb_id,$key,$quest,$send){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url.$kb_id,
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
    function show(string $id=null){
        $r="";
        $url="";
        $key="";
        $mg="";
        $send="";
        $quest='GET';
        $kb_id="";
        
            $url='https://nutc.cognitiveservices.azure.com/qnamaker/v4.0/knowledgebases/';
                $key="71d073f160924eb6b45b21cb2960b486";
                $kb_id="eef1b7fe-64eb-41df-821c-2ac57c853477";
            $kb_id.='/Test/qna';
        $response=$this->curlGo($url,$kb_id,$key,$quest,$send);
        
            //echo('<table border="1" style="float:left;"><tr><th>id</th><th>questions</th><th>answer</th></tr>');
             $re=(array)json_decode($response);
            /*foreach($re["qnaDocuments"] as $e){
                $questions="";
                foreach($e->questions as $qe){
                    $questions.=$qe."<br>";
                }
                echo("<tr><td>".(string)$e->id."</td><td>".$questions."</td><td>".str_replace("\n","<br>",$e->answer)."</td></tr>");
            }

            echo("</table></td><td>");*/
            //echo('<table border="1" style="float:left;"><tr><th>id</th><th>questions</th><th>answer</th></tr>');
        
            /*foreach($re2["qnaDocuments"] as $e){
                $questions="";
                foreach($e->questions as $qe){
                    $questions.=$qe."<br>";
                }
                echo("<tr><td>".(string)$e->id."</td><td>".$questions."</td><td>".str_replace("\n","<br>",$e->answer)."</td></tr>");
            }

            echo("</table>");*/
            $singleQA=[];
            if($id!=null){
            foreach($re["qnaDocuments"] as $singleQA){
                if($singleQA->id==$id){
                    break;
                }
            }
        }
        if($id!=null){
        return view('phoneView',[
            'QAphone'=>$re["qnaDocuments"],
            'Q'=>$singleQA
            ]);
        }else{
        return view('phoneView',[
            'QAphone'=>$re["qnaDocuments"]
            ]);
        }
    }
   
}
