<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yazi extends Model
{
    protected $table = 'yazilar';
    protected $guarded=[];

    public function kategori(){
        return $this->belongsToMany('App\Models\kategori','trees','object_value','relation_value')
            ->wherePivot('object_key','=','Yazi')
            ->wherePivot('relation_key','=','Kategori');
    }
}
