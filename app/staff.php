<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    protected $table = 'staff';
    protected $guarded = ['id','deleted_at','updated_at','created_at'];
    //todo ida nee mak Relasi Ba Iha Position;


    public function position(){
        return $this->belongsTo(position::class);
    }
    public function location(){
        return $this->belongsTo(location::class);
    }
    public function identifikasaun(){
        return $this->belongsTo(identifikasaun::class);
    }
}
