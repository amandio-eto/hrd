<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    protected $table = 'document';
    protected $fillable = ['teka_id','titlu_documentos','documentos','descrisaun'];

    public function teka(){
        return $this->belongsTo(teka::class);
    }
}
