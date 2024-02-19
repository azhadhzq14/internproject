<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;

    protected $table ='author';

    protected $fillable = [ 
        'name_author',
        'gender',
        'emel_author',
        'contact_no_author',
        'alamat'
    ];

    public function module(){
        return $this->belongsTo(Module::class);
    }
}
