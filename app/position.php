<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class position extends Model
{

    protected $table = 'position';
    protected $fillable = ['posisaun'];

    public function staff(){
        return $this->hasMany(staff::class);
    }
}
