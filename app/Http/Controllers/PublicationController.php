<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\User;
use App\Models\Enregistrement;
use App\Models\Like;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;

class PublicationController extends Controller
{
    
     public function template(){

        return view('template');
     }

     public function accueil(){
      $id = Auth::id();

      $publis= Publication::all();

        return view('accueil')->with('publis',$publis);
     }

     public function profile(){
      $id = Auth::id();

      $publis= Publication::select()->where('user_id',$id)->get();

        return view('profile')->with('publis',$publis);
     }

     public function publier(){

      return view('publier');
   }


   public function publierpub(Request $request){

      // $this->validate($request('image'->'required|image');
  
      $original_name =  $request->image->getClientOriginalName();
  
      $filename =  pathinfo($original_name,PATHINFO_FILENAME); 
  
      $extension =  $request->image->getClientOriginalExtension(); 
  
      $filename_store = $filename.time().'.'.$extension;
  
      $request->image->move('photos', $filename_store);
  
  
      //   dd(Auth::user()->id); 
      $id = Auth::id(); 
  
       $p=new Publication ;
       $p->description = $request->input('description');
       $p->image = 'photos/' .$filename_store ;
       $p->user_id= $id ;
       $p->save();
     
       
       return redirect()->route('page.accueil'); 
     }


     public function pagelogout(){

      Auth::logout();
      return redirect('/login');
  }


  public function settings(){

   return view('settings');
}




      public function modifiername(Request $request1){

          $name=$request1->input('name');

          

          $n=User::find(Auth::id());
          $n->name=$name;
          $n->save();

         return redirect()->route('page.settings'); 
      }






      public function modifieremail(Request $request2){

         $email=$request2->input('email');

         $e=User::find(Auth::id());
         $e->email=$email;
         $e->save();

         return redirect()->route('page.settings'); 
      }



     
      public function modifierimage(Request $request3){

         $original_name1 =  $request3->imageprofile->getClientOriginalName();
  
         $filename1 =  pathinfo($original_name1,PATHINFO_FILENAME); 
     
         $extension1 =  $request3->imageprofile->getClientOriginalExtension(); 
     
         $filename_store1 = $filename1.time().'.'.$extension1;
     
         $request3->imageprofile->move('photos', $filename_store1);

       

         $e=User::find(Auth::id());
         $e->profile_photo_path= 'photos/' .$filename_store1;
         $e->save();

        return redirect()->route('page.settings'); 
     }



}
