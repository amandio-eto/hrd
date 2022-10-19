<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class identifikasaun extends Model
{
    protected $table  = 'identifikasaun';

    public function staff(){
        
        return $this->hasMany(staff::class);
    }
}
