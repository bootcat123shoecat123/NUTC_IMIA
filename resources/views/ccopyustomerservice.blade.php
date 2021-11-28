<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        tr:nth-of-type(odd) td form .blocker {
            background: #6798C0;
            border-color: rgb(153, 214, 234);

        }

        tr:nth-of-type(even) td form .blocker {
            background: rgb(153, 214, 234);
            border-color: #6798C0;
            color: black;
        }

        .fixed-content {
            top: 3vh;
            
            position: fixed;
        
        }

        .t {

            position: absolute;
            background: black;
            height: 100%;
            width: 20%;
            top: 0%;
            left: 0%;
        }

        a {
            color: white;
        }

        body {
            overflow-x: hidden;
        }
        input[type=submit] {
   
    background:#6798C0; 
    border:0 none;
  color: rgb(255, 255, 255);
  
}

        /* .dialog-left {
    background: #888888;
    margin: 0 40px;
    height: 90px;
    position: relative;
    width: 50px;
}
.dialog-left::before {
    border-color: transparent #888888 #888888 transparent; 
    border-style: solid; 
    border-width: 20px;
 
  
    content: "";
 
    height: 0px;
    left: -40px;
 
 
    position: absolute;
        top: 35px;

    width: 0px;
}
.dialog-left::after {
    border-color: transparent #fff #fff transparent; 
    border-style: solid solid solid solid; 
    border-width: 10px 20px;
 

    content: "";
 
    height: 0px;
    left: -40px; 
 
 
    position: absolute;
        top: 55px;

    width: 0px;
} */

        .dialogue {
           padding: 3vw;
           height:94vh ;
        }

        .user .avatar {
            width: 10vh;
            text-align: center;
            flex-shrink: 0;
        }

        .user {
            display: flex;
            margin-bottom: 15vw;
            font-family: "Noto Sans TC", sans-serif;
            align-items: flex-start;
        }
        .userd {
            display: flex;
            margin-bottom: 1vw;
            font-family: "Noto Sans TC", sans-serif;
            align-items: flex-start;
        }
        .userd .pic {
            position: relative;
            width: 10vh;
            height: 10vh;
            overflow: hidden;
            border-radius: 50%;
        }

        .userd .pic img {
            width: 100%;
            vertical-align: middle;
        }
        .userd .txt {
      
            padding: 2vw;
            position: relative;
        }
        .user .pic {
            position: relative;
            width: 10vh;
            height: 10vh;
            overflow: hidden;
            border-radius: 50%;
        }

        .user .pic img {
            width: 100%;
            vertical-align: middle;
        }

        .user .txt {
            background-color: #58B2DC;
            padding: 2vw;
            border-radius: 10px;
            color: #fff;
            position: relative;
        }

        .remove .txt {
            margin-left: 2vw;
            margin-right: 23vw;
        }

        .local .txt {
            margin-left: 20px;
            margin-right: 80px;
        }
        .user .ans{
            background-color: #58dc75;
        }
        
        .remove .txt::before {
            content: '';
            position: absolute;
            top: 10px;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-right: 10px solid #58B2DC;
            left: -10px;
        }
        .remove .txt::after {
            display: none;
            content: '';
            position: absolute;
            top: 10px;
            border-top: 3vw solid transparent;
            border-bottom: 3vw solid transparent;
            border-right: 10px solid #58dc75;
            left: -10px;
        }
        .remove .ans::after {
            
            display: block;
        }
       
    </style>
</head>



<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light navbar-default sticky-top" role="navigation"
        style="background:#6798C0;">
        <a class="navbar-brand" href="#" style="color: white">後台</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li>&nbsp;<a href="/backTeach">教師資訊 </a>&nbsp;</li>
                <li>&nbsp;<a href="/backID">樓層資訊</a>&nbsp;</li>
                <li>&nbsp;<a href="/backMap">課程地圖</a>&nbsp;</li>
                <li>&nbsp;<a href="/backFun">功能說明</a>&nbsp;</li>
                <li>&nbsp;<a href="/backCard">Card</a>&nbsp;</li>
                <li>&nbsp;<a href="/place">處室位置</a>&nbsp;</li>
                <li>&nbsp;<a href="/phone">聯絡方式</a>&nbsp;</li>
                <li>&nbsp;<a href="/customer">真人客服</a>&nbsp;</li>
            </ul>

        </div>
    </nav>
    <div class="container-fluid">
        <div class="row flex-nowrap">
     

            <div class="col-4" style="border-color:black;border-style:solid;border-width:0px 2px 0px 0px;">


                <ul class="nav nav-tabs">
                    <li class="nav-item btn-info ">
                        <a href="#todo" class="nav-link active" role="tab" data-toggle="tab">&nbsp;&nbsp;未回覆&nbsp;&nbsp;</a>
                    </li>
                    <li class="nav-item btn-info ">
                        <a href="#finish" class="nav-link" role="tab" data-toggle="tab">&nbsp;&nbsp;已回覆&nbsp;&nbsp;</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="todo">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">

                            @foreach ($question as $var)
                                @if ($var->help == 1)
                                    <div class="nav-link" id="v-pills-{{ $var->user }}-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-{{ $var->user }}"
                                        type="button" role="tab" aria-controls="v-pills-{{ $var->user }}"
                                        aria-selected="true">
                                        <div class="userd">

                                            <!-- 對話的區域 -->
                                            <div class="pic">
                                                <img src="{{ $var->pic }}">
                                             
                                            </div>
                                            <div class="name">{{ $var->userName }}</div>
                                          
                                            <div class="txt">
                                                {{ $var->message }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="finish">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">

                            @foreach ($question as $var)
                                @if ($var->help == 3)
                                    <div class="nav-link" id="v-pills-{{ $var->user }}-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-{{ $var->user }}"
                                        type="button" role="tab" aria-controls="v-pills-{{ $var->user }}"
                                        aria-selected="true">
                                        <div class="user">

                                            <!-- 對話的區域 -->
                                            <div class="pic">
                                                <img src="{{ $var->pic }}">
                                            </div>
                                            <div class="name" style="margin:5px">{{ $var->userName }} </div>
                                        <div>

                                        </div>
                                        </div>

                                      
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>

                </div>

            </div>

            <div class="col-8 p-0" style="background-color: #eeeeee;">
             
              
                    <div class="tab-content fixed-content" id="v-pills-tabContent">
                       
                        @foreach ($question as $var)
                            <div class="tab-pane fade show p0" id="v-pills-{{ $var->user }}"
                                role="tabpanel" aria-labelledby="v-pills-{{ $var->user }}-tab">
                                <div class="dialogue  m-0">
                                    <div class="user remove">
                                        <div class="avatar">
                                            <!-- 對話的區域 -->
                                            <div class="pic">
                                                <img src="{{ $var->pic }}">
                                            </div>
                                            <div class="name" style="margin:5px">{{ $var->userName }}
                                            </div>
                                        </div>
                                        <div class="txt">
                                            {{ $var->message }}
                                        </div>
                                        @if ($var->help==3)
                                       
                                        <div class="txt ans">
                                            {{ $var->answer }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                    <div>
                                    <form action="/customer/ans" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="user" value="{{ $var->user }}">
                                        <div class="row">    
                                            <div class="col-8 pr-0">
                                                <input class="w-100"type="text" name='answer'>
                                            </div>
                                        
                                            <div class="col-2 p-0">
                                                <input class="w-100" type='submit' value='傳送回覆' />
                                            </div>
                                           
                                        </div>
                                     
                                        <br>
                                    </form>
                                    </div>
                                
                                </div>
                                <div>
                            
                            </div>


                        @endforeach

                    </div>
                </div>
            </div>






        </div>
    </div>
    </div>
    </div>


    <!-- bootstrap & popper js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
</body>

</html>
