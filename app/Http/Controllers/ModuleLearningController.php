<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\Module;
use App\Models\PaperKategori;
use App\Models\SubjekPaperKategori;
use App\Models\TahapPendidikan;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\Subjek;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


class ModuleLearningController extends Controller
{
  //
  public function modulelearning()
  {

    $showuser = array();
    if (Session::has('user_id')) {
      $showuser = Admin::where('user_id', '=', Session::get('user_id'))->first();


      return view('panel.modulelearning', compact('showuser'));
    }
  }

  public function prasekolah()
  {

    $showuser = array();
    if (Session::has('user_id')) {
      $showuser = Admin::where('user_id', '=', Session::get('user_id'))->first();

      $kurikulums = Kurikulum::where('tahap_pendidikan_id', '=', 1)->get();

      $pivot = [];
      // $spks = DB::table('modules AS m')
      // ->select(['k.subjek_id', 'k.paper_kategori_id', DB::raw('COUNT(*) AS total')])
      // ->rightJoin('paper_kategori_subjek AS k', 'm.paper_kategori_subjek_id', '=', 'k.id')
      // ->rightJoin('subjeks AS s', 'k.subjek_id', '=', 's.id')
      // ->whereIn('s.kurikulum_id', $kurikulums->pluck('id')->toArray())
      // ->groupBy('k.subjek_id', 'k.paper_kategori_id') // Add GROUP BY clause
      // ->get();

      $spks = DB::table('modules AS m')
      -> select(['k.subjek_id','k.paper_kategori_id', DB::raw('COUNT(*) AS total')])
      ->leftJoin('paper_kategori_subjek AS k', 'm.paper_kategori_subjek_id', '=', 'k.id')
      ->leftJoin('subjeks AS s', 'k.subjek_id', '=', 's.id')
      ->whereIn('s.kurikulum_id',
      $kurikulums->map(function ($row){
        return $row->id;
      })->toArray()
      )
      ->groupBy(['subjek_id', 'paper_kategori_id'])
      ->get();

      // $spks = SubjekPaperKategori::select()
      // ->join('subjeks', 'subjek_id', '=', 'subjeks.id')
      // ->whereIn(
        // 'kurikulum_id',
        // $kurikulums->map(function ($row) {
          // return $row->id;
        // })->toArray()
      // )
      // ->get();
      $papercategory = PaperKategori::select()->whereIn('id', $spks->map(function ($row) {
        return $row->paper_kategori_id;
      }))->get();

      $subjeks = DB::table('subjeks')->select('*')->whereIn('id', $spks->map(function ($row) {
        return $row->subjek_id;
      }))->get();
      foreach ($spks as $row) {
        // if (!isset($pivot[$row->subjek_id])) $pivot[$row->subjek_id] = [];
        // if (!isset($pivot[$row->subjek_id][$row->paper_kategori_id]))
        // $pivot[$row->subjek_id][$row->paper_kategori_id] = 0;
        // $pivot[$row->subjek_id][$row->paper_kategori_id]++;
        // if (!isset($pivot[$row->subjek_id])) $pivot[$row->subjek_id] = [];
        // $pivot[$row->subjek_id][$row->paper_kategori_id] = $row->total;
      }

      return view('panel.prasekolah', get_defined_vars());
    }
  }

  public function sekren(Request $req)
  {

    $showuser = array();
    if (Session::has('user_id')) {
      $showuser = Admin::where('user_id', '=', Session::get('user_id'))->first();

      $kurikulums = Kurikulum::where('tahap_pendidikan_id', '=', 2)->get();
      
      if ($req->isMethod('post')) {
        $kurikulum = $req->post('kurikulum');

        $pivot = [];
        $spks = DB::table('modules as m')
        -> select(['k.subjek_id','k.paper_kategori_id', DB::raw('COUNT(*) AS total')])
        ->rightJoin('paper_kategori_subjek AS k', 'm.paper_kategori_subjek_id', '=', 'k.id')
        ->rightJoin('subjeks AS s', 'k.subjek_id', '=', 's.id')
        ->where('s.kurikulum_id', '=', Kurikulum::where('kurikulum', '=', $kurikulum)->first()->id)
        ->groupBy(['subjek_id', 'paper_kategori_id'])
        ->get();

        // $spks = Module::select(['k.subjek_id','k.paper_kategori_id', DB::raw('COUNT(*) AS total')])
        // ->leftjoin('subjeks', 'subjek_id', '=', 'subjeks.id')
        // ->leftjoin('modules', 'paper_kategori_subjek.id', '=', 'modules.paper_kategori_subjek_id')
        // ->where('kurikulum_id', '=', Kurikulum::where('kurikulum', '=', $kurikulum)->first()->id)
        // ->get(); 
  
        // $spks = SubjekPaperKategori::select()
        // ->join('subjeks', 'subjek_id', '=', 'subjeks.id')
        // ->join('modules', 'paper_kategori_subjek.id', '=', 'modules.paper_kategori_subjek_id', DB::raw('COUNT (*) AS total'))
        // ->where('kurikulum_id', '=', Kurikulum::where('kurikulum', '=', $kurikulum)->first()->id)
        // ->get(); 
        $papercategory = PaperKategori::select()->whereIn('id', $spks->map(function ($row) {
          return $row->paper_kategori_id;
        }))->get();
        $subjeks = DB::table('subjeks AS s')->select('*')->join('kurikulums AS k','s.kurikulum_id','=','k.id')
        ->where('k.kurikulum', '=', $kurikulum)->get();
        foreach ($spks as $row) {
          // if (!isset($pivot[$row->subjek_id])) $pivot[$row->subjek_id] = [];
          // if (!isset($pivot[$row->subjek_id][$row->paper_kategori_id]))
          // $pivot[$row->subjek_id][$row->paper_kategori_id] = 0;
          // $pivot[$row->subjek_id][$row->paper_kategori_id]++;
          if (!isset($pivot[$row->subjek_id])) $pivot[$row->subjek_id] = [];
          $pivot[$row->subjek_id][$row->paper_kategori_id] = $row->total;
        }
      }

      return view('panel.sekren',get_defined_vars());
    }
  }


  public function sekmen(Request $req)
  {

   $showuser = array();
   if (Session::has('user_id')) {
     $showuser = Admin::where('user_id', '=', Session::get('user_id'))->first();
     $kurikulums = Kurikulum::where('tahap_pendidikan_id', '=', 3)->get();
    
     //request button pemilihan jenis kurikulum bagi sek menengah
     if ($req->isMethod('post')){
      $kurikulum = $req->post('kurikulum');
      $pivot = [];
     
      //  Database query
      // $spks = SubjekPaperKategori::select()
      // ->join('subjeks', 'subjek_id', '=', 'subjeks.id')
      // ->where('kurikulum_id', '=', Kurikulum::where('kurikulum', '=', $kurikulum)->first()->id)
      // ->get(); 
      
      $spks = DB::table('modules AS m')
      ->select(['k.subjek_id','k.paper_kategori_id', DB::raw('COUNT(m.id) AS total')])
      ->rightJoin('paper_kategori_subjek AS k', 'm.paper_kategori_subjek_id', '=', 'k.id')
      ->rightJoin('subjeks AS s', 'k.subjek_id', '=', 's.id')
      ->where('s.kurikulum_id', '=', Kurikulum::where('kurikulum', '=', $kurikulum)->first()->id)
      ->groupBy(['subjek_id', 'paper_kategori_id'])
      ->get();
      // dd($spks);

      //Fetching addtional data
       $papercategory = PaperKategori::select()->whereIn('id', $spks->map(function ($row) {
         return $row->paper_kategori_id;
       }))->get();
      //  $subjeks = DB::table('subjeks')->select('*')->whereIn('id', $spks->map(function ($row) {
        //  return $row->subjek_id;
      //  }))->get();
      $subjeks = DB::table('subjeks AS s')->select('*')->join('kurikulums AS k','s.kurikulum_id','=','k.id')
      ->where('k.kurikulum', '=', $kurikulum)->get();
       //Pivot Array
       foreach ($spks as $row) {
        // if (!isset($pivot[$row->subjek_id])) $pivot[$row->subjek_id] = [];
        // if (!isset($pivot[$row->subjek_id][$row->paper_kategori_id]))
        // $pivot[$row->subjek_id][$row->paper_kategori_id] = 0;
        // $pivot[$row->subjek_id][$row->paper_kategori_id]++;
        // $pivot[$row->subjek_id][$row->paper_kategori_id] = $row->total;

        if (!isset($pivot[$row->subjek_id])){} $pivot[$row->subjek_id] = [];
        $pivot[$row->subjek_id][$row->paper_kategori_id] = $row->total;
       }
     }
     return view('panel.sekmen', get_defined_vars());
   }
  }
}

     // foreach ($spks as $row) {
        // if (!isset($pivot[$row->subjek_id])) $pivot[$row->subjek_id] = [];
        // if (!isset($pivot[$row->subjek_id][$row->paper_kategori_id]))
          // $pivot[$row->subjek_id][$row->paper_kategori_id] = 0;
        // $pivot[$row->subjek_id][$row->paper_kategori_id]++;
      // }

    // if($req->isMethod('post')){
    // $kurikulum =  $req->post('kurikulum');
    // $pivot = [];
    // $spks = DB::table('modules As m')
    // ->select([
    // 'k.subjek_id', 'k.paper_kategori_id', DB::raw('COUNT(*) AS total')
    // ])
    // ->join('paper_kategori_subjek AS k', 'm.paper_kategori_subjek_id', '=', 'k.id')
    // ->join('subjeks AS s', 'k.subjek_id', '=', 's.id')
    // ->where('s.kurikulum_id', '=', Kurikulum::where('kurikulum', '=', $kurikulum)->first()->id)
    // ->groupBy(['subjek_id', 'paper_kategori_id'])
    // ->get();
    // $papercategory = PaperKategori::select()->whereIn('id', $spks->map(function ($row) {
    // return $row->paper_kategori_id;
    // }))->get();
    // $subjeks = DB::table('subjeks')->select('*')->whereIn('id', $spks->map(function ($row) {
    //  return $row->subjek_id;
    // }))->get();
    // foreach ($spks as $row){
      // if(!isset($pivot[$row->subjek_id])) $pivot[$row->subjek_id] = [];
      // $pivot[$row->subjek_id][$row->paper_kategori_id] = $row->total;
    // }
    //
     



  // public function sekmen(Request $req)
  // {
  //   $showuser = array();
  //   if (Session::has('user_id')){
  //     $showuser = Admin::where('user_id', '=', Session::get('user_id'))->first();
  //     $kurikulums = Kurikulum::where('tahap_pendidikan_id', '=', 3)->get();

  //if($req->isMethod('post')){
  //  $kurikulum - $req->post('kurikulum');
  //  $pivot = [];
  //  $spks = DB::table('modules As m')
  //  ->select([
  //    'k.subjek_id', 'k.paper_kategori_id', DB::raw('COUNT(*) AS total')
  //  ])
  //  ->join('paper_kategori_subjek AS k', 'm.kategori_id', '=', 'k.id')
  //  ->join('subjek AS s', 'k.subjek_id', '=', 's.id')
  //  ->where('s.kurikulum_id', '=', Kurikulum::where('kurikulum', '=', $kurikulum)->first()->id)
  //  ->groupBy(['subjek_id', 'paper_kategori_id'])
  //  ->get();
  //  $papercategory = PaperKategori::select()->whereIn('id', $spks->map(function ($row) {
  //  return $row->paper_kategori_id;
  //  }))->get();
  //  $subjeks = DB::table('subjeks')->select('*')->whereIn('id', $spks->map(function ($row) {
  //   return $row->subjek_id;
  //  }))->get();
  //  foreach ($spks as $row){
  //    if(!isset($pivot[$row->subjek_id])) $pivot[$row->subjek_id] = [];
  //    $pivot[$row->subjek_id][$row->paper_kategori_id] = $row->total;
  //  }
  //}

  //     return view('panel.sekmen', get_defined_vars());
  //   }
  

