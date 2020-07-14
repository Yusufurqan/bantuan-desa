<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $table = 'index';
    protected $fillable = ['tanggal','coa_id','keterangan','debet','kredit','saldo'];
    public function Coa(){
        return $this->belongsTo(Coa::class ,'coa_id','id');
    }

    public function user(){
        // return $this->belongsTo('App\User');
    }
}
