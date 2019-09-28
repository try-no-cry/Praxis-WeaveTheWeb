<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Article;

class HomeController extends Controller
{
    //

    function index() {
    $article=Article::all();
        return view('welcome',compact('article'));
    }

    public  function uploadImages () {

        
     

        $destinationPath ="ArticleImages";
		$extension = request()->file('articleImage')->getClientOriginalExtension();
                              $filenametostore = 'article'.request()->article_id.mt_rand().'.'.$extension;
							  $path =  request()->file('articleImage')->storeAs($destinationPath, $filenametostore,'public_uploads');
        if($extension!="jpeg" && $extension!="JPEG" && $extension!="jpg" && $extension!="JPG" && $extension!="png" 
        && $extension!="PNG"        ){
			return redirect()->back()->withErrors(["Upload in valid formats only.	"]);
		}							  
        
      
    
        $image=new Image();
        $image->article_id=request()->article_id;
        $image->imagePath=$destinationPath.'/'.$filenametostore;
       
     
        $image->save();
        // dd($report);
        return redirect()->back()->with('success', 'File uploaded successfully.');

    }



    public function uploadArticle(){

       $data= request()->validate([
           "title" =>'required',
           "body" => 'required'
       ]);

       $article=new Article();
       $article->title=request()->title;
       $article->body=request()->body;

       if(request()->file('articleImage')==null){

         
       $article->imagePath="NULL";
     

       $article->save();
   
   
          return redirect()->back()->with('success', 'Article uploaded successfully.');
       }

      

       $destinationPath ="ArticleImages";
       $extension = request()->file('articleImage')->getClientOriginalExtension();
                             $filenametostore = 'article'.mt_rand().'.'.$extension;
                             $path =  request()->file('articleImage')->storeAs($destinationPath, $filenametostore,'public_uploads');
       if($extension=="exe"){
           return redirect()->back()->withErrors(["Upload in valid formats only.	"]);
       }							  
       
     
       // dd($report);
                             
       
       $article->imagePath=$destinationPath.'/'.$filenametostore;
     

    $article->save();


       return redirect()->back()->with('success', 'Article uploaded successfully.');

    }


    public function timeline(){
        $article=Article::all();
        return view('timeline',compact('article'));
    }
}
