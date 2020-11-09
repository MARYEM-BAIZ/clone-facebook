<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/accueil.css')}}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
</head>
<body>
    

  <header>
   <div class="navbar">
  <a style="margin-left:120px ; color:white" href=""> <i style="font-size:40px" class="fa fa-facebook-official " aria-hidden="true"></i></a>
   <form class="d-inline" action="#" method="post">
   <input  class="chercher" style="display:inline ; color:gray  " type="text" name="whats" placeholder="search">
<button  style="border:none ; border-radius:7px" name="" type="submit"> <i style=" padding:8px" class="fa fa-search fa-1x text-muted" aria-hidden="true"></i></button>
</form>
<a href="{{route('page.profile')}}"><h6 class="parties"><img style="border:none;border-radius:50%;width:50px;height:50px" src="{{asset(Auth::user()->profile_photo_path)}}" alt="image"> {{Auth::user()->name}} </h6></a>
<a href="{{route('page.accueil')}}"><h6 class="parties">home </h6></a>
<h6 class="parties">find friends</h6>
<h6 class="parties">create </h6>
<i  style="font-size:20px ; margin-left: 20px"  class="fa fa-user" aria-hidden="true"></i>
<i  style="font-size:20px ; margin-left: 20px" class="fa fa-commenting" aria-hidden="true"></i>
<i  style="font-size:20px ; margin-left: 20px" class="fa fa-bell" aria-hidden="true"></i>
<i  style="font-size:20px ; margin-left: 20px" class="fa fa-question-circle" aria-hidden="true"></i>

<div style="margin-right:400px " class="dropdown">
  <button style=" background-color: rgb(66,103, 178) ; color:black ; border:none" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
  <a class="dropdown-item" href="">Your Groups</a>
    <hr>
    <a class="dropdown-item" href="">Advertising On Facebook</a>
    <hr>
    <a class="dropdown-item" href="">Activity Log</a>
    <a class="dropdown-item" href="">News feed Preferences</a>
    <a class="dropdown-item" href="{{route('page.settings')}}">Settings</a>
    <hr>
    <a class="dropdown-item" href="{{route('page.logout')}}">Log Out</a>
    
  </div>
</div>
   </div>
  </header>

        <!-- <p>main</p>  -->
   <main>
    

  

     <div class="container-default">

       <div class="row">

       <div class="col-10">
   @yield('contenu')   
   </div> 


    <div class="col-2">

    <div class="aside">
    <div style=" border: solid 1px gray ; padding:10px" class="">
       

       <div>
       <h6 class="pull-left">instant games</h6>
       <h6 class="pull-right">more</h6>
       
          

       <div  class="container ">
<div  id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div  class="carousel-inner">
 <div style="margin-top:15px;margin-bottom:15px" class="carousel-item active">
   <!-- <img src="..." class="d-block w-100" alt="..."> -->
   <div class="row ">
   <div class="col-4"><img class="stories" src="photos/cameron-ballard-jH_TNBKr_XU-unsplash.jpg" alt="image"></div>
   <div class="col-4"> <img class="stories" src="photos/highlight-id-roHpoNuME1w-unsplash.jpg" alt="image"></div>
   <div class="col-4"><img class="stories" src="photos/max-AsJirOOLN_s-unsplash.jpg" alt="image"></div>
   
   </div>
 </div>
 <div style="margin-top:15px;margin-bottom:15px" class="carousel-item">
   <!-- <img src="..." class="d-block w-100" alt="..."> -->
  <div class="row ">
   <div class="col-4"> <img class="stories" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
   <div class="col-4"><img class="stories" src="photos/ricardo-frantz-nEd9E9V8Qx0-unsplash.jpg" alt="image"></div>
   <div class="col-4"><img class="stories" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
   
   
  </div>
 </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
 <span class="carousel-control-prev-icon " aria-hidden="true"></span>
 <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next " href="#carouselExampleControls" role="button" data-slide="next">
 <span class="carousel-control-next-icon " aria-hidden="true"></span>
 <span class="sr-only">Next</span>
</a>
</div>
</div>

<hr>
       </div>

   

       <div>
       <h6 class="pull-left">your games</h6>
       <h6 class="pull-right">more</h6>
       
          

       <div  class="container ">
<div  id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div  class="carousel-inner">
 <div style="margin-top:15px;margin-bottom:15px" class="carousel-item active">
   <!-- <img src="..." class="d-block w-100" alt="..."> -->
   <div class="row ">
   <div class="col-4"><img class="stories" src="photos/cameron-ballard-jH_TNBKr_XU-unsplash.jpg" alt="image"></div>
   <div class="col-4"> <img class="stories" src="photos/highlight-id-roHpoNuME1w-unsplash.jpg" alt="image"></div>
   <div class="col-4"><img class="stories" src="photos/max-AsJirOOLN_s-unsplash.jpg" alt="image"></div>
   
   </div>
 </div>
 <div style="margin-top:15px;margin-bottom:15px" class="carousel-item">
   <!-- <img src="..." class="d-block w-100" alt="..."> -->
  <div class="row ">
   <div class="col-4"> <img class="stories" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
   <div class="col-4"><img class="stories" src="photos/ricardo-frantz-nEd9E9V8Qx0-unsplash.jpg" alt="image"></div>
   <div class="col-4"><img class="stories" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
   
   
  </div>
 </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
 <span class="carousel-control-prev-icon " aria-hidden="true"></span>
 <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next " href="#carouselExampleControls" role="button" data-slide="next">
 <span class="carousel-control-next-icon " aria-hidden="true"></span>
 <span class="sr-only">Next</span>
</a>
</div>
</div>

<hr>
       </div>



       <div>
             
          <div class="user">
          <h6 ><img  style="width:30px ; height:30px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="photos/max-AsJirOOLN_s-unsplash.jpg" alt="image"></h6>
          <h6>mary mary</h6>
          <h6 ><i style="color:green" class="fa fa-circle " aria-hidden="true"></i></h6>
          </div>

          <div class="user">
          <h6 ><img  style="width:30px ; height:30px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="photos/rocknwool-RiVYTTgrauQ-unsplash1604534611.jpg" alt="image"></h6>
          <h6>Soukaina baiz</h6>
          <h6 ><i style="color:green" class="fa fa-circle " aria-hidden="true"></i></h6>
          </div>


          <div class="user">
          <h6 ><img  style="width:30px ; height:30px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="photos/highlight-id-roHpoNuME1w-unsplash1604425873.jpg" alt="image"></h6>
          <h6>amine.oficiel</h6>
          <h6 ><i style="color:green" class="fa fa-circle " aria-hidden="true"></i></h6>
          </div>


          <div class="user">
          <h6 ><img  style="width:30px ; height:30px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="photos/cameron-ballard-jH_TNBKr_XU-unsplash.jpg" alt="image"></h6>
          <h6>yeah.yeah</h6>
          <h6 ><i style="color:green" class="fa fa-circle " aria-hidden="true"></i></h6>
          </div>


          <div class="user">
          <h6 ><img  style="width:30px ; height:30px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="photos/highlight-id-roHpoNuME1w-unsplash.jpg" alt="image"></h6>
          <h6>developper</h6>
          <h6 ><i style="color:green" class="fa fa-circle " aria-hidden="true"></i></h6>
          </div>

      
         <div class="mt-4 bg-white p-2 w-100">
         <form class="d-inline" action="#" method="post">
          <button class="chercherdisc"  name="" type="submit"> <i class="fa fa-search fa-1x text-muted" aria-hidden="true"></i> <p style="display:inline ; color:gray ; margin-right:30px"> Search</p>  </button>
          </form>
          
          <a style="color:gray" href=""><i class="fa fa-wpforms pull-right mr-4" aria-hidden="true"></i></a>
          <a style="color:gray" href=""> <i class="fa fa-users pull-right" aria-hidden="true"></i></a>
          <a style="color:gray" href=""><i class="fa fa-video-camera pull-right" aria-hidden="true"></i></a>
          <a style="color:gray " href=""><i class="fa fa-cog pull-right " aria-hidden="true"></i></a>
         </div>
          

       </div>


       </div>
    </div>

    </div>

       </div>

     </div>




   </main>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/pub.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>   
</body>
</html>