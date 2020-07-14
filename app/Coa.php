<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Coa extends Model
{
    protected $table = 'coa';

    public function Index(){
        return $this->hasMany(Index::class);
    }
}
