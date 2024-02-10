<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubjekPaperKategori extends Model
{
  use HasFactory;

  protected $table = "paper_kategori_subjek";

  public function subjek()
  {
    return $this->belongsTo(Subjek::class);
  }

  public function paper_kategori()
  {
    return $this->belongsTo(PaperKategori::class);
  }
}
