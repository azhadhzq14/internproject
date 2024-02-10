<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\author;
use Illuminate\Support\Facades\Session;
use PharIo\Manifest\Author as ManifestAuthor;

class ContributorController extends Controller
{
    //
    public function contributor(){

        $showuser = array();
        if(Session::has('user_id')){
            $showuser = Admin::where('user_id','=', Session::get('user_id'))->first();
            
        return view('panel.contributor', compact('showuser'));
    }
}

    public function listcontributor(){

    $showuser = array();
    if(Session::has('user_id')){
        $showuser = Admin::where('user_id','=', Session::get('user_id'))->first();
        //return view('panel.listcontributor', compact('showuser'));
        $listauthor = Author::all();
        return view('panel.listcontributor', compact('listauthor','showuser'));
    }
   
}

    public function searchcontributor(Request $request){
    
    $showuser = array();
    if(Session::has('user_id')){
        $showuser = Admin::where('user_id','=', Session::get('user_id'))->first();
        //return view('panel.listcontributor', compact('showuser'));
    }

    $searchauthor = $request->input('search');
    $results = author::where('name_author', 'like', "%$searchauthor%")->get();

    return view('panel.listcontributor', ['results' => $results]);

    }

public function addcontributor(){

    $showuser = array();
    if(Session::has('user_id')){
        $showuser = Admin::where('user_id','=', Session::get('user_id'))->first();
        
    return view('panel.addcontributor', compact('showuser'));
}
}

    //kod bagi mengfungsikan borang pendaftaran author/contributor terbaharu
    public function registercontributor(Request $request){
        $showuser = array();
        if(Session::has('user_id')){
            $showuser = Admin::where('user_id','=', Session::get('user_id'))->first();

        }
        
        $request-> validate([
            'name_author'=>'required|min:5|max:255',
            'gender'=> 'required',
            'emel_author'=> 'required|unique:author',
            'contact_no_author'=> 'required',
            'alamat'=>'required'
        ]);

        $exist_author = Author::where('emel_author',$request->emel_author)->first();
        if ($exist_author){
            return back()->with('fail','Maklumat Author/Contributor telah didaftarkan');
        } else{
            //Author doesn't exists, proceed with registration
            $author = new author();
            $author->name_author = $request->name_author;
            $author->gender = $request->gender;
            $author->emel_author = $request->emel_author;
            $author->contact_no_author = $request->contact_no_author;
            $author->alamat = $request->alamat;

            //save the new author to the database
            $author->save();

            //show the notification that the info author can get into 
            if ($author){
                return back()->with('success','Maklumat Author/Contributor terbaru berjaya didaftarkan');
            } else{
                return back()->with('fail','Tidak berjaya didaftarkan');
            }
            
        }
    }

    //paparan maklumat terperinci bagi author atau contributor

    public function detailcontributor(int $id){

    $showuser = array();
    if(Session::has('user_id')){
        $showuser = Admin::where('user_id','=', Session::get('user_id'))->first();
        
        $details_author = Author::find($id);
        return view('panel.detailcontributor', compact('details_author','showuser'));
    }  
}

    public function destroycontributor(int $id){
    $showuser = array();

    // Check if a user_id is present in the session
    if(Session::has('user_id')){
        $showuser = Admin::where('user_id','=', Session::get('user_id'))->first();
    }

    // Find the Author record with the given $id
    $author = author::find($id);

    // Delete the Author record
    $author->delete();

    // Retrieve all Author records after the deletion
    $listauthor = author::all();

    // Redirect back to the previous page with a success message
    return back('panel.listcontributor')->with('success','Maklumat Author/Contributor telah dipadamkan');
}


}


