<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $table = 'location';
    protected $fillable = ['localizada'];

    public function staff(){
        return $this->hasMany(staff::class);
    }

}
