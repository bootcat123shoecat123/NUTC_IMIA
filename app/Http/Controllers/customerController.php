<?php

namespace App\Http\Controllers;
use Crypt;
use App\Models\customer_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt as FacadesCrypt;

class customerController extends Controller
{
    //
    function updateQ(Request $R)
    {
        $recheck = $R->validate(
            [
                'answer' => 'required',
                'user'=>'required',
                'question'=>'required'
            ]
        );
        customer_model::where('user', FacadesCrypt::decrypt($R->user))->where('message', $R->question)->update(
            [
                'answer' => $R->answer,
                'help' => 3
            ]
        );
        echo shell_exec("python answer.py");
        return redirect('/customer');
    }
    function getusername(string $user_id)
    {
        $auther = 'imzwbdnWwai8/UeyDB+P0xix/PsQZ177WNAmVIyPVaJMvRStdih9kZyniAHJAjMn2v+yU4dqITNccEpYqDPaRYsVLbHNXux9cRD7KTzIrrdEOFiMzlJVaxGhvYEgfMnG/gecF00JidNQbm6B6tqMqQdB04t89/1O/w1cDnyilFU=';

        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.line.me/v2/bot/profile/'.$user_id,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$auther
  ),
));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
    function show()
    {
        #report coursemap's name、url
        $id=0;
        $cline =customer_model::select('message', 'help', 'user','answer')->get();
        foreach ($cline as $key=>$var){
            $userdata=(array)json_decode($this->getusername($var['user']));
            if(isset( $userdata['displayName'])){
                $cline[$key]['id']=$id;
                $cline[$key]['user']=FacadesCrypt::encrypt($cline[$key]['user']);
                 $cline[$key]['userName'] = $userdata['displayName'];
            $cline[$key]['pic']=$userdata['pictureUrl'];
            $id++;
            }
           
        }
        return view('customerservice', [
            'question' => $cline
        ]);
    }
}
