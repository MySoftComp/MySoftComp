<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $table = 'categories';
    public function software(){
        return $this->hasMany(software::class);
    }
    public $timestamps = false;
}
