
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
body{
    　overflow-x: hidden;
}
        </style>
    </head>
    
   
    
    <body class="antialiased"> 
        <nav class="navbar navbar-expand-lg navbar-light navbar-default sticky-top" role="navigation" style="background:#6798C0;">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                
              </ul>
              
            </div>
          </nav>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-2 col-md-3 col-xl-2 px-sm-2 px-1 bg-dark">
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
        </div>
    
        <div class="col-10 ml-5">
            <br>
            <div class="row align-self-center ml-5">
      
            <h5 class="col-10"><strong>功能介紹</strong></h5>
            
     </div>
   
        <div class="container-fluid border border-light rounded">
            <div class="row mt-3">
                <div class="col-3 text-center">
                    <strong>功能表單</strong>
                    <hr>
                </div>
                <div class="col-5 text-center">
                    <strong>使用說明</strong>
                    <hr>
                </div>

                <div class="col-2 text-center">
                    <strong>操作</strong>
                    <hr>
                </div>
            </div>
     @php
     $mnum = 1;
 @endphp
 @foreach($value->richmanu as $item)
     @php
         $modal = "exampleModal".(string)$mnum;
     @endphp
     <div class="row">
        <div class="col-3 text-center">
            <p>{{  $item->msgIn }}</p>
            </div>
            <div class="col-3 text-center">
                <p>{{  $item->msgOut }}</p>
                </div>
                <div class="col-3 text-center">
                    <p>{{  $item->mark }}</p>
                    </div>
                    <div class="col-3 text-center">
                        <p>{{  $item->mark }}</p>
                        </div>
     


        <div class="col-1">
            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="<?php echo "#".$modal."ri" ?>">
                🖊️
                </button>
        <div class="modal fade c0" id="<?php echo $modal."ri" ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modal."Titleri" ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-d">
                <div class="modal-header">
                <h5 class="modal-title" id="<?php echo $modal."Titleri" ?>">{{$item->msgIn}}</h5>
                <button type="button" class="close c0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">

                <div class="container">
                    <form method="post"  action="/backMap/Fupdate">
                        {{ csrf_field() }}
                        <input type="hidden" name="OmsgIn">
                        <div class="m-12">
                         <div class="row">
                          <div class="col-12">
                            <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">msgIn</label>
                          </div>
        
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" name="msgIn">
                          </div>
                          <br>
                          <div class="m-12">
                            <div class="row">
                             <div class="col-12">
                               <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">msgOut</label>
                             </div>
           
                           </div>
                           <input type="text" class="form-control" aria-label="Text input with checkbox" name="msgOut">
                             </div>
                             <br>
                             <div class="m-12">
                                <div class="row">
                                 <div class="col-12">
                                   <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">mark</label>
                                 </div>
               
                               </div>
                               <input type="text" class="form-control" aria-label="Text input with checkbox" name="mark">
                                 </div>
                                 <br>
                                 <div class="m-12">
                                    <div class="row">
                                     <div class="col-12">
                                       <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">sort</label>
                                     </div>
                   
                                   </div>
                                   <input type="text" class="form-control" aria-label="Text input with checkbox" name="sort">
                                     </div>
                                     <br>
                        </form>

              
                
            </div>
            </div>
        </div>
        </div>
    </div>
        </div>
        <div class="col-1">
            <form action="/delete/backFun" method="post">
                            {{ csrf_field() }}
                            <input name="msgIn" type="hidden" value="{{$item->msgIn}}" >
                            <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right">
            </form>
</div>

@php
$mnum++
@endphp
</div>
@endforeach

        </div>

        <div class="container-fluid border border-light rounded">
            <div class="row mt-3">
                <div class="col-3 text-center">
                    <strong>CARD名稱</strong>
                    <hr>
                </div>
                <div class="col-5 text-center">
                    <strong>詳細資訊</strong>
                    <hr>
                </div>

                <div class="col-2 text-center">
                    <strong>操作</strong>
                    <hr>
                </div>
            </div>
     @php
     $mnum = 1;
 @endphp
 @foreach($value->coursemap as $item)
     @php
         $modal = "exampleModal".(string)$mnum;
     @endphp
     <div class="row">
        <div class="col-3 text-center">
            <p>{{  $item->msgIn }}</p>
            </div>
            <div class="col-3 text-center">
                <p>{{  $item->msgOut }}</p>
                </div>
                <div class="col-3 text-center">
                    <p>{{  $item->mark }}</p>
                    </div>
                    <div class="col-3 text-center">
                        <p>{{  $item->mark }}</p>
                        </div>
     


        <div class="col-1">
            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="<?php echo "#".$modal."Co" ?>">
                🖊️
                </button>
        <div class="modal fade c0" id="<?php echo $modal."Co" ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modal."TitleCo" ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-d">
                <div class="modal-header">
                <h5 class="modal-title" id="<?php echo $modal."TitleCo" ?>">{{$item->msgIn}}</h5>
                <button type="button" class="close c0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">

                <div class="container">
                    <form method="post"  action="/backMap/Mupdate">
                        {{ csrf_field() }}
                        <input type="hidden" name="OmsgIn">
                        <div class="m-12">
                         <div class="row">
                          <div class="col-12">
                            <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">msgIn</label>
                          </div>
        
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" name="msgIn">
                          </div>
                          <br>
                          <div class="m-12">
                            <div class="row">
                             <div class="col-12">
                               <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">msgOut</label>
                             </div>
           
                           </div>
                           <input type="text" class="form-control" aria-label="Text input with checkbox" name="msgOut">
                             </div>
                             <br>
                             <div class="m-12">
                                <div class="row">
                                 <div class="col-12">
                                   <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">mark</label>
                                 </div>
               
                               </div>
                               <input type="text" class="form-control" aria-label="Text input with checkbox" name="mark">
                                 </div>
                                 <br>
                                 <div class="m-12">
                                    <div class="row">
                                     <div class="col-12">
                                       <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">sort</label>
                                     </div>
                   
                                   </div>
                                   <input type="text" class="form-control" aria-label="Text input with checkbox" name="sort">
                                     </div>
                                     <br>
                        </form>
              
                
            </div>
            </div>
        </div>
        </div>
    </div>
        </div>
        <div class="col-1">
            <form action="/delete/backFun" method="post">
                            {{ csrf_field() }}
                            <input name="msgIn" type="hidden" value="{{$item->msgIn}}" >
                            <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right">
            </form>
</div>

@php
$mnum++
@endphp
</div>
@endforeach

        </div>
        <div class="container-fluid border border-light rounded">
            <div class="row mt-3">
                <div class="col-3 text-center">
                    <strong>資管介紹</strong>
                    <hr>
                </div>
                <div class="col-5 text-center">
                    <strong>詳細資訊</strong>
                    <hr>
                </div>

                <div class="col-2 text-center">
                    <strong>操作</strong>
                    <hr>
                </div>
            </div>
     @php
     $mnum = 1;
 @endphp
 @foreach($value->introduce as $item)
     @php
         $modal = "exampleModal".(string)$mnum;
     @endphp
     <div class="row">
        <div class="col-3 text-center">
        <p>{{  $item->msgIn }}</p>
        </div>
        <div class="col-3 text-center">
            <p>{{  $item->msgOut }}</p>
            </div>
            <div class="col-3 text-center">
                <p>{{  $item->mark }}</p>
                </div>
                <div class="col-3 text-center">
                    <p>{{  $item->mark }}</p>
                    </div>
        <div class="col-1">
            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="<?php echo "#".$modal."Bu" ?>">
                🖊️
                </button>
        <div class="modal fade c0" id="<?php echo $modal."Bu" ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modal."TitleBu" ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-d">
                <div class="modal-header">
                <h5 class="modal-title" id="<?php echo $modal."TitleBu" ?>">{{$item->msgIn}}</h5>
                <button type="button" class="close c0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">

                <div class="container">
                  
                    <form method="post"  action="/backMap/Mupdate">
                {{ csrf_field() }}
                <input type="hidden" name="OmsgIn">
                <div class="m-12">
                 <div class="row">
                  <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">msgIn</label>
                  </div>

                </div>
                <input type="text" class="form-control" aria-label="Text input with checkbox" name="msgIn">
                  </div>
                  <br>
                  <div class="m-12">
                    <div class="row">
                     <div class="col-12">
                       <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">msgOut</label>
                     </div>
   
                   </div>
                   <input type="text" class="form-control" aria-label="Text input with checkbox" name="msgOut">
                     </div>
                     <br>
                     <div class="m-12">
                        <div class="row">
                         <div class="col-12">
                           <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">mark</label>
                         </div>
       
                       </div>
                       <input type="text" class="form-control" aria-label="Text input with checkbox" name="mark">
                         </div>
                         <br>
                         <div class="m-12">
                            <div class="row">
                             <div class="col-12">
                               <label for="exampleFormControlTextarea1" class="p-0 m-0" style="font-size:2vh;text-align: left">sort</label>
                             </div>
           
                           </div>
                           <input type="text" class="form-control" aria-label="Text input with checkbox" name="sort">
                             </div>
                             <br>
                </form>

              
                
            </div>
            </div>
        </div>
        </div>
    </div>
        </div>
        <div class="col-1">
<form action="/delete/backFun" method="post">
                {{ csrf_field() }}
                <input name="msgIn" type="hidden" value="{{$item->msgIn}}" >
                <input type="submit" value="🗑️" class="btn btn-outline-danger pull-right">
</form>
</div>

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

    </body>
</html>