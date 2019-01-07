<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class software extends Model
{
    //
    protected $table = 'software';
    public function category(){
        return $this->belongsTo(category::class,'category_id');
    }
    public $timestamps = false;
}
