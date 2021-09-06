

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
<title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="{{asset('t.css')}}" rel="stylesheet">
        <!-- Styles -->
        <style>
            tr:nth-of-type(odd) td form .blocker{
    background: #6798C0;
    border-color: rgb(153, 214, 234);

}
tr:nth-of-type(even) td form .blocker{
    background: rgb(153, 214, 234);
    border-color: #6798C0;
    color: black;
}
.fixed-content {
    top: 10%;
    bottom:0;
    position:fixed;
    overflow-y:scroll;
    overflow-x:hidden;
}
.t{
    
    position:absolute;
background: black;
    height: 100%;
    width: 20%;
    top:0%;
    left: 0%;
}
        </style>
    </head>
    
   
    
    <body class="antialiased"> <nav class="sticky-top navbar navbar-expand-lg navbar-light" role='navigation' style="background:#6798C0;">
        <a class="navbar-brand" href="#">Navbar</a>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            
          </ul>
          
        </div>
      </nav>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-1 bg-dark ">
                    <div class="position-fixed text-white container">
                        <a class="h2 text-white">Database</a>
                       <ul class="nav navbar-nav text-white">
                        <li ><a href="/place">處室位置</a></li>
                        <li class="active"><a href="/phone">聯絡方式</a></li>
                      </ul>
                    </div>
                </div>
                <div class="col py-3 position-sticky">
        <table class="table">
            <tr class="row justify-content-start"><th class="col-1" scope="col">id</th><th class="col-2" scope="col">questions</th><th class="col-auto" scope="col">answer</th><th class="col-auto" scope="col"></th></tr>
            <tr class="row"><input id="ls" type="button" class="w-100 btn btn-outline-success pull-right" value="新增QA"></tr>
            @foreach ($QAphone as $item)
            <tr class="row"><a href="#{{$item->id}}"></a><td class="col-1 h2" scope="col" onclick="putid('phone',{{$item->id}})">{{$item->id}}</td>
                <td class="col-2" scope="col">
                    <form action="/question/phone" method="post">{{ csrf_field() }}  <input name="id" type="hidden" value="{{$item->id}}"><input class="btn btn-info w-100 blocker" type="submit" value="Questions"></form>
               <input type="button" onclick="putid('phone',{{$item->id}})" value="新增問句" class="btn btn-outline-success pull-right w-100 ls2" >
               @if (count($item->questions)<3)
               @for ($i = 0; $i < count($item->questions); $i++)
               
             <div class="col-15 text-truncate">
                   {{$item->questions[$i]}}
               </div>
               @endfor 
               @else
                    @for ($i = 0; $i < 3; $i++)
              <div class="col-15 text-truncate">
                    {{$item->questions[$i]}}
                </div> 
                @endfor 
               @endif
            </div>
            </div>
        </td>
                <!--<div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><div class="dropdown"> 
                        
                         foreach($item->questions as $qitem) 
                        <a class="dropdown-item" >!!$qitem!!}
                            <form action="/update/phone/deleteQ" method="post"> 
                                { csrf_field() }}
                                <input name="id" type="hidden" value="{$item->id}}" >
                                <input name="Qdelete" type="hidden" value="!!$qitem!!}">
                                <input type="submit" value="X"　 class="btn btn-outline-danger pull-right" >
                            </form></a>
                         endforeach
                        </div>-->
            
                <td class="col py-3">{!!nl2br($item->answer)!!}</td><td>
                    <input onclick="putid('phone',{{$item->id}})" type="submit" value="🖊️" class="btn btn-outline-info pull-right ls3">
            </td><td>
                    <form action="/delete/phone/" method="post">
                    {{ csrf_field() }}
                    <input name="id" type="hidden" value="{{$item->id}}" >
                    <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right">
                </form>
            </td>
            </tr>
            @endforeach
        </table>
                </div>
        <div class="col px-1 bg-light">
        <div class="col fixed-content">
            
            @if (isset($Q))
            <table class="table">
                <tr class="row"><th class="col-3 w-80" scope="col">{{$Q->id}}</th></tr>
                
            @foreach($Q->questions as $qitem) 
            <tr class="row"><td class="col-3 w-80" scope="col">{!!$qitem!!}
                </td><td>
                <form action="/update/phone/deleteQ" method="post"> 
                    {{ csrf_field() }}
                    <input name="id" type="hidden" value="{{$Q->id}}">
                    <input name="Qdelete" type="hidden" value="{!!$qitem!!}">
                    <input type="submit" value="X"　 class="btn btn-outline-danger pull-right" >
                </form>
                </td>
            </tr>
             @endforeach
             <tr class="row"><td><input type="button" onclick="putid('phone',{{$Q->id}})" value="新增問句" class="btn btn-outline-success pull-right w-100 ls2" ></td></tr>
            </table>
            @endif
            
                </div>
            </div>
          </div>

                </div>
            </div>
        </div>
        
    </div >
        
</div>

<div style="height:101%;width:101%;position:fixed;top:0%;left:0%; background-color:black;opacity:0.6;z-index: 9999; display:none; " id="dialogB"></div>
<div class="card dialog" style="top:25%;left:25%;width:50%;height:50%;position:fixed; display:inline;z-index:10000;background-color:white; display:none;">
    <h5 class="card-header">新增聯絡方式QA</h5>
  <div class="card-body">
    <p class="card-text">
      不同問法需用換行隔開 </p>
        <form method="post"  action="/add/phone/" >
      {{ csrf_field() }}
  新增問句：<textarea  name="Q" size="100" placeholder="提問"></textarea><br/>
  新增回應：<textarea  name="A" size="100" placeholder="回答"></textarea><br/>
  <input class="btn-info pull-bottom w-100" type="submit">
</form>
        </div>
  </div>
   
<div class="card dialog3" style="top:25%;left:25%;width:50%;height:50%;position:fixed; display:inline;z-index:10000;background-color:white; display:none;">
    <h5 class="card-header">修改聯絡方式提問</h5>
  <div class="card-body">
    <p class="card-text">
        輸入要修改的QA
        <form action="/update/phone/addA" method="post">
            {{ csrf_field() }}
            <input type="text" name="id" style="border: none;pointer-events: none;" value="" class="phoneclass"><br>
            <textarea name="A" id="phonea" placeholder="回答"></textarea><br>
            <input class="btn-info pull-bottom w-100"  type="submit">
        </form>
        </div>
  </div>

<div class="card dialog2" style="top:25%;left:25%;width:50%;height:50%;position:fixed; display:inline;z-index:10000;background-color:white; display:none;">
    <h5 class="card-header">新增問題</h5>
  <div class="card-body">
    <p class="card-text">
      不同問法需用換行隔開 </p>
        <form method="post"  action="/update/phone/add">
      {{ csrf_field() }}
      <a class="phoneclass"></a>
      <input type="text" name="id" style="border: none;pointer-events: none;" value="" class="phoneclass"><br>
  新增問句：<textarea  name="Qadd" size="100" placeholder="提問"></textarea><br/>
  <input class="btn-info pull-bottom w-100" type="submit">
</form>
        </div>
  </div>



<script> 
function putq(go,value,id){
    putid(go,id);
    document.getElementById(go+"d").value=value;
}
function puta(go,value,id){
    putid(go,id);
    document.getElementById(go+"a").value=value;
}
function putid(go,value){
    let idclass= document.getElementsByClassName(go+"class");
    for (let i = 0; i < idclass.length; i++) {
        idclass[i].value=value;
    };
    
}

$(function(){
                    $('#ls').click(function(){ 
                        $('.dialog').css("display","inline");
                    });
                    $('.ls2').click(function(){ 
                        $('.dialog2').css("display","inline");
                    });
                    $('.ls3').click(function(){ 
                        $('.dialog3').css("display","inline");
                    });
                    $('#ls,.ls2,.ls3').click(function(){ 
                        $('#dialogB').css("display","inline");
                    });
                    $('#dialogB').click(function(){ 
                        $('#dialogB').css("display","none");
                        $('.dialog2,.dialog,.dialog3').css("display","none");
                    });
                });
</script>
    </body>
</html>
