<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\User;
use App\Models\Commentaire;
use App\Models\Enregistrement;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    
    public function publiercomment( $id , Request $request){

        $contenu=$request->input('contenu');

        $id1= Auth::id();

        $c=new Commentaire;
        $c->contenu_comment=$contenu;
        $c->user_id=$id1;
        $c->publication_id=$id;
        $c->save();

        return redirect()->route('page.accueil');
    }


}
