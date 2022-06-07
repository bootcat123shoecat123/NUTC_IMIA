

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

body{
    　overflow-x: hidden;
  
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
.A{
  display: flex;
    justify-content: center; 
    align-items: center; 
}
a {
    color:white;
}
        </style>
    </head>
    
   
    
    <body class="antialiased"> 
      <nav class="navbar navbar-expand-lg navbar-light navbar-default sticky-top" role="navigation" style="background:#6798C0;">
        <a class="navbar-brand" href="#" style="color: white">後台</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li >&nbsp;<a href="/backTeach">教師資訊   </a>&nbsp;</li>
            <li >&nbsp;<a href="/backID">樓層資訊</a>&nbsp;</li>
            <li >&nbsp;<a href="/backMap">課程地圖</a>&nbsp;</li>
            <li >&nbsp;<a href="/backFun">功能說明</a>&nbsp;</li>
            <li>&nbsp;<a href="/backCard">Card</a>&nbsp;</li>
            <li >&nbsp;<a href="/place">處室位置</a>&nbsp;</li>
            <li >&nbsp;<a href="/phone">聯絡方式</a>&nbsp;</li>
                <li >&nbsp;<a href="/known">資管系問答</a>&nbsp;</li>
            <li>&nbsp;<a href="/customer">真人客服</a>&nbsp;</li>
          </ul>
          
        </div>
      </nav>
<div class="container-fluid">
    <div class="row flex-nowrap">
        {{-- <div class="col-2 col-md-3 col-xl-2 px-sm-2 px-1 bg-dark">
            <div class="position-fixed text-white container">
              <a class="h2 text-white">QnA</a>
              <ul class="nav navbar-nav text-white">
               <li ><a href="/backTeach">教師資訊</a></li>
               <li ><a href="/backID">樓層資訊</a></li>
               <li ><a href="/backMap">課程地圖</a></li>
               <li ><a href="/backFun">功能</a></li>
             </ul>
                <a class="h2 text-white">Database</a>
               <ul class="nav navbar-nav text-white">
                <li ><a href="/place">處室位置</a></li>
                <li class="active"><a href="/phone">聯絡方式</a></li>
              </ul>
            </div>
        </div> --}}
        <br>
        <br>
        <br>
        <br>
        <div class="col-12">
            <br>
            <div class="row A">
     
         
            <h4 class="col-10"><strong>課程地圖</strong></h4>
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModalBu">
                新增地圖
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModalBu" tabindex="-1" role="dialog" aria-labelledby="exampleModalBuTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title mx-auto"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;新增地圖</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="post"  action="/create/backMap" >
                          {{-- 新增課程地圖 --}}
                            {{ csrf_field() }}
                            <div class="m-3">
                          <div class="row">
                              <div class="col-3">
                                <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">代碼</label>
                              </div>

                            </div>
                            <input type="text" class="form-control" aria-label="Text input with checkbox">
                              </div>
                              <div class="m-3">
                                <div class="row">
                                  <div class="col-3">
                                    <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">建築名稱</label>
                                  </div>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with checkbox">
                              </div>
                              <br>
                            <input class="btn btn-primary pull-bottom w-100" type="submit">
                            </form>
                      </div>

                    </div>
                  </div>
                </div>
     </div>
     <br>

     <h3 class="A">資管</h3>
     <br>
     <br>
        <div class="container-fluid">
          <div style="border-color:#FBE251; border-style:solid;border-radius:2vh;}">
            <div class="row A">
            <div class="col-5 border border-light rounded">
              
     @php
     $mnum = 1;
 @endphp
 @foreach($value->IM2 as $item)
     @php
         $modal = "exampleModal".(string)$mnum;
     @endphp
     
     <div class="row">
        <div class="col-10 text-center">
        <p>{{  $item->name }}</p>
        </div>
        <div class="col-1">
            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="<?php echo "#".$modal."IM2" ?>">
                🖊️
                </button>
        <div class="modal fade c0" id="<?php echo $modal."IM2" ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modal."TitleIM2" ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-d">
                <div class="modal-header">
                <h5 class="modal-title" id="<?php echo $modal."TitleIM2" ?>">{{$item->name}}</h5>
                <button type="button" class="close c0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">

                <div class="container">
                  
                    <form method="post"  action="/backMap/Mupdate">
                      {{-- 編輯資管科二技地圖 --}}
                {{ csrf_field() }}
                <div class="m-12">
              <div class="row">
                  <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">名稱</label>
                  </div>

                </div>
                <input type="text" class="form-control" aria-label="Text input with checkbox" >
                  </div>
                  <br>
                  <div class="m-12">
                    <div class="row">
                      <div class="col-12">
                        <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">詳情</label>
                      </div>
                    </div>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="A" size="100" placeholder=""></textarea>
                  </div>
                  <br>
                  <div class="modal-footer m-12">
                    <input class="btn btn-primary pull-bottom w-100" type="submit">
                  </div>
                </form>

              
                
            </div>
            </div>
        </div>
        </div>
    </div>
        </div>
        <div class="col-1">
<form action="/delete/backMap" method="post">
       {{-- 刪除資管科二技地圖 --}}
                {{ csrf_field() }}
                <input name="id" type="hidden" value="{{$item->id}}" >
                <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right">
</form>
</div>
<hr>
@php
$mnum++
@endphp
</div>
@endforeach
</div>
            <div class="col-1"></div>
            <div class="col-5 border border-light rounded">
     @php
     $mnum = 1;
 @endphp
 @foreach($value->IM5 as $item)
     @php
         $modal = "exampleModal".(string)$mnum;
     @endphp
     
     <div class="row">
        <div class="col-10 text-center">
        <p>{{  $item->name }}</p>
        </div>
        <div class="col-1">
            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="<?php echo "#".$modal."IM5" ?>">
                🖊️
                </button>
        <div class="modal fade c0" id="<?php echo $modal."IM5" ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modal."TitleIM5" ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-d">
                <div class="modal-header">
                <h5 class="modal-title" id="<?php echo $modal."TitleIM5" ?>">{{$item->name}}</h5>
                <button type="button" class="close c0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">

                <div class="container">
                  
                    <form method="post"  action="/backMap/Mupdate">
                    {{-- 編輯資管科五專地圖 --}}
                {{ csrf_field() }}
                <div class="m-12">
              <div class="row">
                  <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">名稱</label>
                  </div>

                </div>
                <input type="text" class="form-control" aria-label="Text input with checkbox" >
                  </div>
                  <br>
                  <div class="m-12">
                    <div class="row">
                      <div class="col-12">
                        <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">詳情</label>
                      </div>
                    </div>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="A" size="100" placeholder=""></textarea>
                  </div>
                  <br>
                  <div class="modal-footer m-12">
                    <input class="btn btn-primary pull-bottom w-100" type="submit">
                  </div>
                </form>

              
                
            </div>
            </div>
        </div>
        </div>
    </div>
        </div>
        <div class="col-1">
<form action="/delete/backMap" method="post">
     {{-- 刪除資管科二技地圖 --}}
                {{ csrf_field() }}
                <input name="id" type="hidden" value="{{$item->id}}" >
                <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right">
</form>
</div>
<hr>
@php
$mnum++
@endphp
</div>
@endforeach
</div>
</div>
          </div>
<br>
<br>
<br>
<br>
<br>
          <h3 class="A">資訊應用</h3>
          <div class="container-fluid">
            <div style="border-color:#BEC23F; border-style:solid;border-radius:2vh;}">
              <div class="row">
              <div class="col-5 border border-light rounded">
       @php
       $mnum = 1;
   @endphp
   @foreach($value->IA2 as $item)
       @php
        $modal = "exampleModal".(string)$mnum;
       @endphp
       
       <div class="row">
        <div class="col-10 text-center">
        <p>{{  $item->name }}</p>
        </div>
        <div class="col-1">
            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="<?php echo "#".$modal."IA2" ?>">
                🖊️
                </button>
          <div class="modal fade c0" id="<?php echo $modal."IA2" ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modal."TitleIA2" ?>" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bg-d">
                  <div class="modal-header">
                  <h5 class="modal-title" id="<?php echo $modal."TitleIA2" ?>">{{$item->name}}</h5>
                  <button type="button" class="close c0" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
  
                  <div class="container">
                    
                      <form method="post"  action="/backMap/Mupdate">
                        {{-- 編輯資訊應用二技地圖 --}}
                  {{ csrf_field() }}
                  <div class="m-12">
                <div class="row">
                    <div class="col-12">
                      <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">名稱</label>
                    </div>
  
                  </div>
                  <input type="text" class="form-control" aria-label="Text input with checkbox" >
                    </div>
                    <br>
                    <div class="m-12">
                      <div class="row">
                        <div class="col-12">
                          <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">詳情</label>
                        </div>
                      </div>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="A" size="100" placeholder=""></textarea>
                    </div>
                    <br>
                    <div class="modal-footer m-12">
                      <input class="btn btn-primary pull-bottom w-100" type="submit">
                    </div>
                  </form>
  
                
                  
              </div>
              </div>
          </div>
          </div>
      </div>
          </div>
          <div class="col-1">
  <form action="/delete/backMap" method="post">
     {{-- 刪除資訊應用二技地圖 --}}
                  {{ csrf_field() }}
                  <input name="id" type="hidden" value="{{$item->id}}" >
                  <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right">
  </form>
  </div>
  <hr>
  @php
  $mnum++
  @endphp
  </div>
  @endforeach
  </div>
              <div class="col-1"></div>
              <div class="col-5 border border-light rounded">
       @php
       $mnum = 1;
   @endphp
   @foreach($value->IA5 as $item)
       @php
           $modal = "exampleModal".(string)$mnum;
       @endphp
       
       <div class="row">
          <div class="col-10 text-center">
          <p>{{  $item->name }}</p>
          </div>
          <div class="col-1">
              <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="<?php echo "#".$modal."IM2" ?>">
                  🖊️
                  </button>
          <div class="modal fade c0" id="<?php echo $modal."IA5" ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modal."TitleIA5" ?>" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bg-d">
                  <div class="modal-header">
                  <h5 class="modal-title" id="<?php echo $modal."TitleIA5" ?>">{{$item->name}}</h5>
                  <button type="button" class="close c0" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
  
                  <div class="container">
                    
                      <form method="post"  action="/backMap/Mupdate">
                         {{-- 編輯資訊應用五專地圖 --}}
                  {{ csrf_field() }}
                  <div class="m-12">
                <div class="row">
                    <div class="col-12">
                      <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">名稱</label>
                    </div>
  
                  </div>
                  <input type="text" class="form-control" aria-label="Text input with checkbox" >
                    </div>
                    <br>
                    <div class="m-12">
                      <div class="row">
                        <div class="col-12">
                          <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">詳情</label>
                        </div>
                      </div>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="A" size="100" placeholder=""></textarea>
                    </div>
                    <br>
                    <div class="modal-footer m-12">
                      <input class="btn btn-primary pull-bottom w-100" type="submit">
                    </div>
                  </form>
  
                
                  
              </div>
              </div>
          </div>
          </div>
      </div>
          </div>
          <div class="col-1">
  <form action="/delete/backMap" method="post">
     {{-- 刪除資訊應用五專地圖 --}}
                  {{ csrf_field() }}
                  <input name="id" type="hidden" value="{{$item->id}}" >
                  <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right">
  </form>
  </div>
  <hr>
  @php
  $mnum++
  @endphp
  </div>
  @endforeach
  </div>
  </div>
            </div>
</div>
</div>
</div>
</div>
<br>
<br>
    </body>
</html>
