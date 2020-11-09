<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\User;
use App\Models\Enregistrement;
use App\Models\Like;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    
   public function publierlike($id){
      
    $id1= Auth::id();

     $l=new Like;
     $l->user_id=$id1;
     $l->publication_id=$id;
     $l->save();

     
     return redirect()->route('page.accueil');


   }

}
