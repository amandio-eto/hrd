<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teka extends Model
{
    protected $table = 'teka';
    protected $guarded = ['id','created_at','updated_at'];

    //todo ida nee mak Teka
    public function document(){

        return $this->hasMany(document::class);
    }
}
