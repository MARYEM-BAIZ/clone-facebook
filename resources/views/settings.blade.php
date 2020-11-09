@extends('template')
@section('contenu')

  

 <div class="container bg-white">
     <div class="row">















       <div style="border-right:1px solid gray" class="col-4">

       <div class="d-flex ml-5 mt-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-1.png" alt="image"></h6>
   <h6>General</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-2.png" alt="image"></h6>
   <h6>Security and Login</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-3.png" alt="image"></h6>
   <h6>Your facebook Information</h6>
   </div>
<hr>
   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-4.png" alt="image"></h6>
   <h6>Privacy</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-5.png" alt="image"></h6>
   <h6>Face recognition</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-6.png" alt="image"></h6>
   <h6>Profile and Tagging</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-7.png" alt="image"></h6>
   <h6>Public Posts</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-8.png" alt="image"></h6>
   <h6>Blocking</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-9.png" alt="image"></h6>
   <h6>Location</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-10.png" alt="image"></h6>
   <h6>Langague and Region</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-11.png" alt="image"></h6>
   <h6>Stories</h6>
   </div>
  <hr>
   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-12.png" alt="image"></h6>
   <h6>Notifications</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-13.png" alt="image"></h6>
   <h6>Mobile</h6>
   </div>
  <hr>
   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-14.png" alt="image"></h6>
   <h6>Apps and Websites</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-15.png" alt="image"></h6>
   <h6>Instant Games</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-16.png" alt="image"></h6>
   <h6>Business Integrations</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-17.png" alt="image"></h6>
   <h6>Ads</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-18.png" alt="image"></h6>
   <h6>Ads Payment</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-18.png" alt="image"></h6>
   <h6>Facebook Pay</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-19.png" alt="image"></h6>
   <h6>Support Inbox</h6>
   </div>

   <div class="d-flex ml-5">
   <h6><img class="mr-3 " style="border:none;border-radius:50%;width:30px;height:30px" src="photos/fa-s-20.png" alt="image"></h6>
   <h6>Videos</h6>
   </div>

       </div>









        <!-- ######### -->
     
         <div style="border-right:1px solid gray" class="col-6">

     <p class="mt-4 mb-4"><strong>General Account Settings</strong></p>

       <div class="container"   style="border-bottom:1px solid gray ; border-top:1px solid gray">
 

        <div class="row">
     <div class="col-3">Name</div>
     <div class="col-9 ">
     <form style=" display: flex; flex-direction: row " class=" mb-2" method="post"  action="{{route('page.modifiername')}}">
 @csrf 
   <input style="border:none; padding-left:10px ; color:gray " type="text" name="name" value="{{Auth::user()->name}}">
   <input style=" margin-left:100px " class="btn btn-inline text-info " type="submit" name="publier" value="edit">
 </form>
   
     </div>
    
        </div>
        <hr>


        <div class="row">
     <div class="col-3">User Name</div>
     <div class="col-9 ">
     <form style=" display: flex; flex-direction: row " class=" mb-2" method="post" action="">
 @csrf 
   <input style="border:none; padding-left:10px ; color:gray " type="text" name="username" value="you have not set a username">
   <input style=" margin-left:100px " class="btn btn-inline text-info " type="submit" name="publier" value="edit">
 </form>
     </div>
    
        </div>


        <hr>




        <div class="row">
     <div class="col-3">Profile Photo</div>
     <div class="col-9 ">
     <form style=" display: flex; flex-direction: row " class=" mb-2" method="post" enctype="multipart/form-data" action="{{route('page.modifierimage')}}">
 @csrf 
   <input style="border:none; padding-left:10px ; color:gray" type="file" name="imageprofile" >
   <input style="  " class="btn btn-inline text-info " type="submit" name="" value="edit">
 </form>
     </div>
    
        </div>


        <hr>





        <div class="row">
     <div class="col-3">Contact</div>
     <div class="col-9 ">
     <form style=" display: flex; flex-direction: row " class=" mb-2" method="post" action="{{route('page.modifieremail')}}">
 @csrf 
   <input style="border:none; padding-left:10px ; color:gray" type="text" name="email" value="{{Auth::user()->email}}">
   <input style=" margin-left:100px " class="btn btn-inline text-info " type="submit" name="publier" value="edit">
 </form>
     </div>
    
        </div>

        <hr>


        <div class="row">
     <div class="col-3">Add Account Contact</div>
     <div class="col-9 ">
     <form style=" display: flex; flex-direction: row " class=" mb-2" method="post" action="">
 @csrf 
   <input style="border:none; padding-left:10px ; color:gray " type="text" name="eee" value="{{Auth::user()->email}}">
   <input style=" margin-left:100px " class="btn btn-inline text-info " type="submit" name="publier" value="edit">
 </form>
     </div>
    
        </div>


        <hr>


        <div class="row">
     <div class="col-3">Memorialisation Settings</div>
     <div class="col-9 ">
     <form style=" display: flex; flex-direction: row " class=" mb-2" method="post" action="">
 @csrf 
   <input style="border:none; padding-left:10px ; color:gray " type="text" name="" value="Decide what happens to your account after you pass away">
   <input style=" margin-left:100px " class="btn btn-inline text-info " type="submit" name="publier" value="edit">
 </form>
     </div>
    
        </div>

        <hr>

        <div class="row">
     <div class="col-3">Identity Confirmation</div>
     <div class="col-9 ">
     <form style=" display: flex; flex-direction: row " class=" mb-2" method="post" action="">
 @csrf 
   <input style="border:none; padding-left:10px " type="text" name="contenu" value="Confirm your identity to do things like run ads about social issues, elections or politics">
   <input style=" margin-left:100px " class="btn btn-inline text-info " type="submit" name="publier" value="View">
 </form>
     </div>
    
        </div>



       </div>


         </div>

          <!-- ######### -->






    <div class="col-2"></div>

     </div>
 </div>



@endsection