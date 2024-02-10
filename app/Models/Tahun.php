<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    use HasFactory;

    protected $table = 'tahuns';

    protected $primaryKey = 'id';

    protected $fillable = ['tahun','peringkat'];

    public function tahap_pendidikans()
    {
        return $this->belongsTo(TahapPendidikan::class);
    } 

}
