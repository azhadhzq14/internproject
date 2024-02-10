<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\PaperKategori;
use App\Models\SubjekPaperKategori;
use App\Models\TahapPendidikan;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\Subjek;
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
            $ids = SubjekPaperKategori::select(['paper_kategori_id'])->join('subjeks','subjek_id','=','subjeks.id')
            ->whereIn('kurikulum_id',
            $kurikulums->map(function($row){return $row->id;})->toArray())
            ->get();
            //->map(function($row){
            //    return $row->tahap_pendidikan_id;
            //}); 

            $papercategory = PaperKategori::all()->whereIn('id',$ids->map(function($row){return $row->paper_kategori_id;}));
            $subjeks = Subjek::select()->whereIn('id',$ids->map(function($row){return $row->subjek_id;}));

            return view('panel.prasekolah', get_defined_vars());
        }
    }

    public function sekren()
    {

        $showuser = array();
        if (Session::has('user_id')) {
            $showuser = Admin::where('user_id', '=', Session::get('user_id'))->first();

            $kurikulums = Kurikulum::where('tahap_pendidikan_id', '=', 2)->get();

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
