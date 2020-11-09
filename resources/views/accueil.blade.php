@extends('template')
@section('contenu')



   <div class="container">

   <div class="row">







    <div class="col-3">
    <div class="p-3">
   
   <div class="d-flex mt-1 mb-4 ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="{{asset(Auth::user()->profile_photo_path)}}" alt="image"></h6>
   <h6>maryem baiz</h6>
   </div>
   
   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-1.png" alt="image"></h6>
   <h6>News Feed</h6>
   </div>
   
   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-2.png" alt="image"></h6>
   <h6>Messenger</h6>
   </div>
   
   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-3.png" alt="image"></h6>
   <h6>Watch</h6>
   </div>
   
   <div class="d-flex ml-5 mb-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-4.png" alt="image"></h6>
   <h6>Marcketplace</h6>
   </div>

   <div class="d-flex ml-5 ">
   <h6 class="mr-3 text-muted">Shortcuts</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-5.png" alt="image"></h6>
   <h6>PHP Developers,M...</h6>
   </div>
   
   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-5.png" alt="image"></h6>
   <h6>Administration Wind..</h6>
   </div>
   
   <div class="d-flex ml-5 mb-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-5.png" alt="image"></h6>
   <h6>Réseaux et systé...</h6>
   </div>
   
   <div class="d-flex ml-5 ">
   <h6 class="mr-3 text-muted">Explore</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-6.png" alt="image"></h6>
   <h6>COVID-19 informat..</h6>
   </div>
   
   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-7.png" alt="image"></h6>
   <h6>Pages</h6>
   </div>
   
   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-8.png" alt="image"></h6>
   <h6>Events</h6>
   </div>
   
   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-9.png" alt="image"></h6>
   <h6>Groups</h6>
   </div>
   
   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-10.png" alt="image"></h6>
   <h6>Fundraisers</h6>
   </div>

   <div class="d-flex ml-5 ">
    <a href="">See More</a>
   </div>

      </div>
    </div>



  
   
   
   
   
   
   <!-- <p>debut du sections du publications</p> -->
   
    <div class="col-6">

    <div>
   
   
   <section style="background-color: white ; margin-top:30px ; margin-bottom:20px ">
   <div>
   <h6 style=" background-color: rgb(245,246,247) ; padding:10px ;border-top-left-radius: 7px; border-top-right-radius: 7px">create a post</h6>
   </div>
 
 
   <div  style="padding:10px">
   <form class="d-inline" action="#" method="post">
   <img class="mr-3 " style="border:none;border-radius:50%;width:60px;height:60px" src="{{asset(Auth::user()->profile_photo_path)}}" alt="image">
         <input style="display:inline ; color:gray ;padding-right:30px " type="text" name="whats" placeholder="what's on your mind,{{Auth::user()->name}} ?">
           <button style="border:none ; background-color:rgb(250, 250, 250)" class=""  name="" type="submit">  </button>
           </form>
   </div>
   <hr>
 
    <div class="post">
     <div class="post2"><a class="post1" href=""><img src="photos/fa-11.png" alt="image"> <h6 style="color:black ; margin-left:20px">Create a room</h6></a></div>
     <div class="post2"><a class="post1" href="{{route('page.publier')}}"><img src="photos/fa-12.png" alt="image"> <h6 style="color:black ; margin-left:20px">Photo video</h6></a></div>
     <div class="post2"><a class="post1" href=""><img src="photos/fa-13.png" alt="image"> <h6 style="color:black ; margin-left:20px">Tag friend</h6></a></div>
     <div class="post2"><a class="post1" href=""><i style="font-size:20px ; margin-left:30px ; color:black" class="fa fa-ellipsis-h mt-2" aria-hidden="true"></i></a></div>
    </div>
 
   </section>
 
 
   <section style="background-color: white ; margin-top:20px;margin-bottom:20px; padding:10px ">
   <div> <h5 class="d-inline text-muted">Rooms .</h5><h6  class="d-inline text-muted">vidéo chat with friens</h6>   <a class="pull-right" href="">Create Room</a></div>
   <div class="container">
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
 <div class="carousel-inner">
  <div class="carousel-item active">
    <!-- <img src="..." class="d-block w-100" alt="..."> -->
    <div class="row p-3">
    <div class="col-2"><img class="storiess" src="photos/cameron-ballard-jH_TNBKr_XU-unsplash.jpg" alt="image"></div>
    <div class="col-2"> <img class="storiess" src="photos/highlight-id-roHpoNuME1w-unsplash.jpg" alt="image"></div>
    <div class="col-2"><img class="storiess" src="photos/max-AsJirOOLN_s-unsplash.jpg" alt="image"></div>
    <div class="col-2">  <img class="storiess" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
    <div class="col-2">  <img class="storiess" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
    <div class="col-2"> <img class="storiess" src="photos/highlight-id-roHpoNuME1w-unsplash.jpg" alt="image"></div>
    </div>
  </div>
  <div class="carousel-item">
    <!-- <img src="..." class="d-block w-100" alt="..."> -->
   <div class="row p-3">
    <div class="col-2"> <img class="storiess" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
    <div class="col-2"><img class="storiess" src="photos/ricardo-frantz-nEd9E9V8Qx0-unsplash.jpg" alt="image"></div>
    <div class="col-2"><img class="storiess" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
    <div class="col-2"><img class="storiess" src="photos/max-AsJirOOLN_s-unsplash.jpg" alt="image"></div>
    <div class="col-2">  <img class="storiess" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
    <div class="col-2">  <img class="storiess" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></div>
   </div>
  </div>
 </div>
 <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
 </a>
 <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
 </a>
 </div>
 </div>
 
   </section>
 
  
    <section style="background-color: white ;  margin-top:20px;margin-bottom:20px; padding:10px">
 
    <div> <h5 class="d-inline text-muted">Stories</h5>  <a class="pull-right" href="">See all</a></div>
 
   <div class="container">
       <div  class="row">
 
        <div class="col-3"><a href=""><img style="width:100% ; height:200px ; border:none;border-radius:15px" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image">   </a></div>
        <div class="col-3"><a href=""><img style="width:100% ; height:200px; border:none;border-radius:15px" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></a></div>
        <div class="col-3"><a href=""><img style="width:100% ; height:200px; border:none;border-radius:15px" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></a></div>
        <div class="col-3"><a href=""><img style="width:100% ; height:200px; border:none;border-radius:15px" src="photos/mikhail-vasilyev-NodtnCsLdTE-unsplash.jpg" alt="image"></a></div>
 
       </div>
   </div>
 
    </section>
 
   
      <section style="background-color: white ; margin-top:20px;margin-bottom:20px; padding:10px " >
 
      <div class="container">
     <div class="row ">
     <div class="col-12 mb-2">
     @if(isset($publis))
  @foreach($publis as $publi)
   <div class="d-flex"  >
 <div style="" class=" ">
 <img style="width:50px ; height:50px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="{{ asset($publi->user->profile_photo_path) }}" alt="image">
 </div>
 <div style="" class="">
 <h4>{{ $publi->user->name}}</h4>
 </div >
        
                  <div class="btn-group" style="" class="">
                  <a href="#" id="imageDropdown" data-toggle="dropdown">
                  <i style="font-size:20px ; margin-left:80px ; color:black" class="fa fa-ellipsis-h mt-2" aria-hidden="true"></i>
                         </a>
                         <div class="dropdown-menu">
                        <form class="dropdown-item" action="#" method="post">
                          @csrf
                              <input style="border:none;background-color:white" type="submit" name="signaler" value="signaler">
                        </form>
                  </div>
                 
                             
  </div>
   </div>

  <div class="col-12"><h4>{{ $publi->description }}</h4></div>
  <div class="col-12"><img class="imagepub" src="{{ $publi->image }}" alt="image"></div>
  

  <div class="col-12"><h6 class="pull-right text-muted ">{{ $publi->commentaires->count() }} comments</h6></div>
 
  <div class="col-12">
 <hr>
   <div class="container">
   
   <div class="row">
    <div class="col-4">  
    <form style="display:inline" class=" mr-5 ml-3" action="{{ route('page.like',['id' => $publi->id])}}" method="post">
         @csrf          
             <button style="border:none ; background-color:white" type="submit" name="liker" ><h6 class="d-inline"> <i style="font-size:25px" class="fa fa-heart-o " aria-hidden="true"></i> {{ $publi->likes->count() }} like</h6> </button>
           </form>
    </div>
    <div class="col-4"><a style="color:black" href=""><h6 class="d-inline"> <i style="font-size:25px"  class="fa fa-comment-o " aria-hidden="true"></i> comment</h6></a></div>
    <div class="col-4">
    <form style="display:inline" class=" mr-5 ml-3" action="{{ route('page.save',['id' => $publi->id])}}" method="post">
         @csrf          
             <button style="border:none ; background-color:white" type="submit" name="save" ><h6 class="d-inline"> <i style="font-size:25px"  class="fa fa-bookmark-o  " aria-hidden="true"></i>{{ $publi->enregistrements->count() }}  share</h6></button>
           </form>
    </div>
   </div>
 
   </div>
   <hr>
  </div>
 
    <div class="col-12">
        <a class="pull-left" href="">View 8 more comments</a>
        <h6 class="pull-right">5 of 13</h6>
    </div>
 
     <div class="col-12 d-inline">
        
 
          <div  class="container">
  @if(isset($publi))
  @foreach($publi->commentaires as $comment)
 <div class="row">
 <div class="col-3">
 <img style="width:30px ; height:30px; border-radius:50% " src="{{ asset($comment->user->profile_photo_path) }}" alt="image"> 
 </div>
 
 <div class="col-6  ">
  
 <h6><strong>{{$comment->user->name}}</strong>: {{ $comment->contenu_comment }}</h6>
 </div>
 </div>
 @endforeach
  @endif

 
 
 
 </div>
 
 <hr>
 <form style=" display: flex; flex-direction: row " class=" mb-2" method="post" action="{{ route('page.publiercomment',['id' => $publi->id])}}">
 @csrf 
   <input style="border:none; padding-left:10px " type="text" name="contenu" placeholder="écrire un commentaire...">
   <input style=" margin-left:225px " class="btn btn-inline text-info " type="submit" name="publier" value="publier">
 </form>
 <hr>
 @endforeach
  @endif
         </div>
 
     </div>
      </div>
     
      </section>
 
 
 
 
 </div>

    </div>



 <!-- <p>fin du sections du publications</p> -->





   
  <div class="col-3">
  <div>
   
   <article class="bg-white p-2 mt-5 mb-2">
   English (US) · العربية · Français (France) · ⵜⴰⵎⴰⵣⵉⵖⵜ · Español
   <i style="font-size: 25px" class="fa fa-plus-square-o " aria-hidden="true"></i>
   </article>
   <article>
       <p>Privacy · Terms · Advertising · Ad Choices ·</p>
       <p>Cookies · More</p>
       <p>Facebook © 2020</p>
   </article>
   
   </div>
  </div>















   </div>

   </div>



@endsection