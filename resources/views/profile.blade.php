@extends('template')
@section('contenu')



  <div class="container">
  <div class="row">
      <div class="col-1"></div>
  <div class="col-8">
 <!-- ########## -->


   <section style=" border: 1px solid gray ; background-image: url(photos/avatar.png) ;  background-position: center; background-repeat: no-repeat; background-size: cover ;  width: 100%; height: 300px">
   <div class="imageprofileimage">




     <div style=" display: flex;flex-direction: row ; margin-top:200px">
     <h5 ><img style="border: 3px solid white;border-radius:50%;width:100px;height:100px ; display:inline-block" src="{{asset(Auth::user()->profile_photo_path)}}" alt="image"> {{Auth::user()->name}}</h5>
<h6 style="color:gray ;background-color:white;border:1px solid gray ;padding:7px ; align-self: flex-end ;margin-left:200px ;margin-bottom:50px">Update info <small style="color:white; background-color:red ; padding-left:7px ;padding-right:7px">6</small></h6>
<h6 style="color:gray ;background-color:white;border:1px solid gray  ;padding:7px ; align-self: flex-end ;margin-bottom:50px"><i class="fa fa-list-ol" aria-hidden="true"></i> Activity log <small style="color:white; background-color:red ; padding-left:7px ;padding-right:7px">2</small><i style="padding-left:10px; padding-right:10px " class="fa fa-ellipsis-h" aria-hidden="true"></i></h6>
     </div>

   </div>




   <div style=" border: 1px solid gray">
   <div style="  display: flex;flex-direction: row;justify-content: space-between;justify-content: space-around" class=" bg-white p-2" >
   <div class="dropdown">
  <button style="color: rgb(66,103, 178) ; border:none" class="btn btn-secondary dropdown-toggle bg-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Timeline
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>



<div><a style="color: rgb(66,103, 178) ; border:none" href="">About</a></div>

<div><a style="color: rgb(66,103, 178) ; border:none" href="">Friends</a></div>

<div><a style="color: rgb(66,103, 178) ; border:none" href="">Photos</a></div>

<div><a style="color: rgb(66,103, 178) ; border:none" href=""><i class="fa fa-lock" aria-hidden="true"></i> Archive</a></div>


<div class="dropdown">
  <button style="color: rgb(66,103, 178) ; border:none" class="btn btn-secondary dropdown-toggle bg-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    More
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
   </div>

   </div>
   </section>



  <!-- ########## section2-->

 <section>
   <div class="container ">
<div class="row">



 <!-- ########## section2 div-col-4-->
    <div class="col-4">
  
    <div class="container ">
        <div class="row">

        <div style="margin-top:70px " class="col-12 d-flex bg-white p-2"><i style="padding:7px; background-color: rgb(66,103, 178) ; color:white ;border-radius:7px" class="fa fa-star " aria-hidden="true"></i>  <h6>2 items-to review</h6> <i class="fa fa-times text-muted pull-right" aria-hidden="true"></i></div>
        </div>
    </div>
    </div>

  <!-- ########## section2 div-col-8-->
    <div class="col-8">


    <section style="background-color: white ; margin-top:70px">
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


    <section >
 
 <div class="container">
<div class="row">
<div class="col-12">
@if(isset($publis))
@foreach($publis as $publi)
<div class="d-flex"  >
<div style="" class=" ">
<img style="width:50px ; height:50px; border-radius:50% ; display:block ; margin-left:auto; margin-right:auto" src="{{ asset($publi->user->profile_photo_path) }}" alt="image">
</div>
<div style="margin-right:100px" class="">
<h4>{{ $publi->user->name}}</h4>
</div >
   
             <div class="btn-group" style="margin-left:100px" class="">
             <a href="#" id="imageDropdown" data-toggle="dropdown">
             <i style="font-size:20px ; margin-left:30px ; color:black" class="fa fa-ellipsis-h mt-2" aria-hidden="true"></i>
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
   </div>
 </section>



  <!-- ########## -->
  </div>
  </div>
  </div>



@endsection