<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperKategori extends Model
{
    use HasFactory;

    public function subjeks()
    {
        return $this->belongsToMany(Subjek::class);
    }

}
