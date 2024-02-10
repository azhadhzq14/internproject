<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahapPendidikan extends Model
{
    use HasFactory;

    protected $table = 'tahap_pendidikans';

    protected $primaryKey = 'id';

    protected $fillable = ['tahap_pendidikan'];

    //one to many realtionships with table kurikulums
    public function kurikulums()
    {
        return $this->hasMany(Kurikulum::class);
    }

    public function tahuns(){
        return $this->hasMany(Tahun::class);
    }

    
    

    
}
