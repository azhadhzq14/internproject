<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;
    protected $table = 'kurikulums';

    protected $primaryKey = 'id';


    //one to many relationships with table kurikulum
    public function tahap_pendidikans()
    {
        return $this->belongsTo(TahapPendidikan::class);
    } 

    public function subjeks()
    {
        return $this->hasMany(Subjek::class);
    } 


}
