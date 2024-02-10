<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\PaperKategori;
use App\Models\SubjekPaperKategori;
use App\Models\TahapPendidikan;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\Subjek;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
      $spks = SubjekPaperKategori::select()
        ->join('subjeks', 'subjek_id', '=', 'subjeks.id')
        ->whereIn(
          'kurikulum_id',
          $kurikulums->map(function ($row) {
            return $row->id;
          })->toArray()
        )
        ->get();
      $papercategory = PaperKategori::select()->whereIn('id', $spks->map(function ($row) {
        return $row->paper_kategori_id;
      }))->get();
      $subjeks = DB::table('subjeks')->select('*')->whereIn('id', $spks->map(function ($row) {
        return $row->subjek_id;
      }))->get();
      foreach ($spks as $row) {
        if (!isset($pivot[$row->subjek_id])) $pivot[$row->subjek_id] = [];
        if (!isset($pivot[$row->subjek_id][$row->paper_kategori_id]))
          $pivot[$row->subjek_id][$row->paper_kategori_id] = 0;
        $pivot[$row->subjek_id][$row->paper_kategori_id]++;
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
        $spks = SubjekPaperKategori::select()
          ->join('subjeks', 'subjek_id', '=', 'subjeks.id')
          ->where('kurikulum_id', '=', Kurikulum::where('kurikulum', '=', $kurikulum)->first()->id)
          // ->whereIn(
          //   'kurikulum_id',
          //   $kurikulums->map(function ($row) {
          //     return $row->id;
          //   })->toArray()
          // )
          ->get();
        $papercategory = PaperKategori::select()->whereIn('id', $spks->map(function ($row) {
          return $row->paper_kategori_id;
        }))->get();
        $subjeks = DB::table('subjeks')->select('*')->whereIn('id', $spks->map(function ($row) {
          return $row->subjek_id;
        }))->get();
        foreach ($spks as $row) {
          if (!isset($pivot[$row->subjek_id])) $pivot[$row->subjek_id] = [];
          if (!isset($pivot[$row->subjek_id][$row->paper_kategori_id]))
            $pivot[$row->subjek_id][$row->paper_kategori_id] = 0;
          $pivot[$row->subjek_id][$row->paper_kategori_id]++;
        }
      }

      return view('panel.sekren', get_defined_vars());
    }
  }

  public function sekmen()
  {

    $showuser = array();
    if (Session::has('user_id')) {
      $showuser = Admin::where('user_id', '=', Session::get('user_id'))->first();
      $kurikulums = Kurikulum::where('tahap_pendidikan_id', '=', 3)->get();

      return view('panel.sekmen', get_defined_vars());
    }
  }
}
