<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $table = "modules";

    public function paper_kategori_subjek ()
    {
        return $this->belongTo(SubjekPaperKategori::class);
    }

    public function author ()
    {
        return $this->hasMany(author::class);
    }
}
