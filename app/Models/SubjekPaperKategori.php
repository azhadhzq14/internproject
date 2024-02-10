<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjekPaperKategori extends Model
{
    use HasFactory;

    protected $table = "paper_kategori_subjek";
    
    protected $fillable = ['subjek_id','paper_kategori_id'];
}
