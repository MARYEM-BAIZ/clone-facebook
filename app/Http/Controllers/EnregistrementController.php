<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\User;
use App\Models\Enregistrement;
use App\Models\Like;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;

class EnregistrementController extends Controller
{
    
    public function publiersave($id){
      
        $id1= Auth::id();
    
         $e=new Enregistrement;
         $e->user_id=$id1;
         $e->publication_id=$id;
         $e->save();
    
         
         return redirect()->route('page.accueil');
    
    
       }

}
