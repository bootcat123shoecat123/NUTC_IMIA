

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
a {
    color:white;
}
body{
    　overflow-x: hidden;
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

.dialogue{
  padding:  3vw ;
  background-color: #F2F2F2;
  
}
.user .avatar{
  width: 10vh;
  text-align: center;
  flex-shrink: 0;
}
.user{
  display: flex;
  margin-bottom: 15vw;
  font-family: "Noto Sans TC",sans-serif;
  align-items:flex-start ;
}
.user .pic{
  position:relative;
    width:10vh;
    height:10vh;
    overflow:hidden;
    border-radius:50%;
}
.user .pic img{
  width: 100%;
  vertical-align: middle;
}

.user .txt{
  background-color:#58B2DC;
  padding: 2vw;
  border-radius: 10px;
  color: #fff;
  position: relative;
}
.remove .txt{
  margin-left: 2vw;
  margin-right: 23vw;
}

.local .txt{
margin-left: 20px;
margin-right: 80px;
}

.remove .txt::before{
  content: '';
  position: absolute;
  top:10px;
  border-top: 3vw solid transparent;
  border-bottom: 3vw solid transparent;
  border-right: 10px solid #58B2DC;
left: -10px;
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
    
<div class="col-3" style="border-color:black;border-style:solid;border-width:0px 2px 0px 0px;">
         
               
<ul class="nav nav-tabs">
        		<li class="nav-item">
        			<a href="#todo" class="nav-link active" role="tab" data-toggle="tab">未讀</a>
        		</li>
        		<li class="nav-item">
        			<a href="#finish" class="nav-link" role="tab" data-toggle="tab">已讀</a>
        		</li>
        	</ul>
        	<div class="tab-content">
        		<div role="tabpanel" class="tab-pane active" id="todo">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <div class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</div>
    <div class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</div>
    <div class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</div>
    <div class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</div>
  </div></div>
        		<div role="tabpanel" class="tab-pane fade" id="finish">
                    2</div>

        	</div>

</div>

<div class="col-7 p-0">
<div class="d-flex align-items-start">

  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active dialog-left p0" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
      <div class="dialogue">
        <div class="user remove">
          <div class="avatar">
            <!-- 對話的區域 -->
            <div class="pic">
              <img src="a.png">
            </div>
            <div class="name" style="margin:5px">姓名</div>
          </div>
          <div class="txt">
            阿咧阿咧阿咧阿咧阿咧阿咧阿咧阿咧阿咧

          </div>
        </div>
      </div>
    </div>
    
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">.6.</div>

  </div>
</div>
</div>


      
        
    
   
</div>
</div>
</div>
</div>


<!-- bootstrap & popper js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    </body>
</html>
