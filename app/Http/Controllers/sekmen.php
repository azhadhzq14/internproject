public function sekmen(Request $req)
  {

   $showuser = array();
   if (Session::has('user_id')) {
     $showuser = Admin::where('user_id', '=', Session::get('user_id'))->first();
     $kurikulums = Kurikulum::where('tahap_pendidikan_id', '=', 3)->get();
     $kategori = Subjek::where('kategori')->get();
     $subkategori = Subjek::where('sub_kategori')->get();

     //request button pemilihan jenis kurikulum bagi sek menengah
     if ($req->isMethod('post')){
      $kurikulum = $req->post('kurikulum');
      $pivot = [];
      $spks = SubjekPaperKategori::select()
         ->join('subjeks', 'subjek_id', '=', 'subjeks.id')
         ->where('kurikulum_id', '=', Kurikulum::where('kurikulum', '=', $kurikulum)->first()->id)
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
     return view('panel.sekmen', get_defined_vars());
   }
  }

    $kategori = Subjek::where('kategori')->get();
    $subkategori = Subjek::where('sub_kategori')->get();

  @foreach ($subjeks as $subjek)
    <tr>
      <td class="text-center">{{ $loop->iteration}}</td>
      <td>{{ $subjek->subjek }}</td>
      @foreach ($papercategory as $pk)
        <td class="text-center">
        {{ isset($pivot[$subjek->id][$pk->id]) ? $pivot[$subjek->id][$pk->id] : 0 }}
        </td>
      @endforeach
    </tr>
  @endforeach

  @foreach ($subjeks as $subjek)
    <tr>
      <td class="text-center">{{ $loop->iteration }}</td>
      <td>{{ $subjek->subjek }}</td>
      @foreach ($papercategory as $pk)
        <td class="text-center">
          @if (isset($pivot[$subjek->id]))
            @if(isset($pivot[$subjek->id][$pk->id]))
              {{$pivot[$subjek->id][$pk->id]}}
            @else
            0
            @endif
            @else
            0
          @endif
        </td>
      @endforeach
    </tr>
  @endforeach

                  <!-- @if(isset($pivot[$subjek->id][$pk->id]))
                @else
                  {{$subjek->id.'-'.$pk->id}}
                @endif -->
