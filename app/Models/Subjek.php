<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjek extends Model
{
    use HasFactory;

    //many to many relationships
    public function kurikulums()
    {
        return $this->belongsToMany(Kurikulum::class);
    }

    //many to many relationship
    

    //many to many relationships
    public function paper_kategoris()
    {
        return $this->belongsToMany(PaperKategori::class);
    }
}
