<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class topControll extends Controller
{
    //
    function question(Request $R){
       return($this->show($R->id));
    }

    function update($id,Request $R){
        $ra='';
        $rd='';
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
        if($id=="deleteQ"){
            
            //$mg=explode("\n",$R->Qdelete);
            
            $rd='
            "delete":["'.$R->Qdelete.'"]';
            /*foreach($mg as $e){
            $rd.='"'.$e.'",';
                
            }*/
            //$rd=str_replace("\r",'',$rd);
        }
            
            $url='https://nutcqatest32local.cognitiveservices.azure.com/qnamaker/v4.0/knowledgebases/';
            $key="056483546d824f47bbe0a733141eccb6";
            $kb_id="67a3f89b-fbac-4017-bda2-f99dc0b21dd7";
            if ($R->id<=68)$soure="863fc937-7920-437b-8392-32a25df7c6f7-Kb (1).xlsm - QnAs.tsv";
            else $soure="Custom Editorial";
            

        if($R->A!="")$sendA='"answer": "'.$R->A.'",';
            $quest='PATCH';
            $send='{"update":{
                "qnaList": [
                  {
                    "id": '.$R->id.','.$sendA.'
                    "source": "'.$soure.'",
                    "questions": {'. $ra. $rd.'}
                    
                  }]
                }
             }   ';
        $response=$this->curlGo($url,$kb_id,$key,$quest,$send);
        sleep(4);
        return redirect("/place");
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
        
            $url='https://nutcqatest32local.cognitiveservices.azure.com/qnamaker/v4.0/knowledgebases/';
            $key="056483546d824f47bbe0a733141eccb6";
            $kb_id="67a3f89b-fbac-4017-bda2-f99dc0b21dd7";
            if ($R->id<=68)$soure="863fc937-7920-437b-8392-32a25df7c6f7-Kb (1).xlsm - QnAs.tsv";
            else $soure="Custom Editorial";
           
            $quest='PATCH';
            $send='{
                "delete": {
                        
                            "ids": ['.(int)$R->id.'],
                            "sources": ["'.$soure.'"]
                        
                    
                }
            }';
        $response=$this->curlGo($url,$kb_id,$key,$quest,$send);
        sleep(4);
        return redirect("/place");
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
                $url='https://nutcqatest32local.cognitiveservices.azure.com/qnamaker/v4.0/knowledgebases/';
                $key="056483546d824f47bbe0a733141eccb6";
                $kb_id="67a3f89b-fbac-4017-bda2-f99dc0b21dd7";
       
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
        sleep(4);
        return  redirect("/place");
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
        
            print($r);
                $url='https://nutcqatest32local.cognitiveservices.azure.com/qnamaker/v4.0/knowledgebases/';
                $key="056483546d824f47bbe0a733141eccb6";
                $kb_id="67a3f89b-fbac-4017-bda2-f99dc0b21dd7";
           
            
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
        return view('welcome',[
            'QAplace'=>$re["qnaDocuments"],
            'Q'=>$singleQA
            ]);
        }else{
        return view('welcome',[
            'QAplace'=>$re["qnaDocuments"]
            ]);
        }
    }
}
