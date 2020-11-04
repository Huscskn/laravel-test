<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategoriler';
    protected $guarded = [];

   public function yazilar()
    {
        return $this->belongsToMany('App\Models\yazi', 'trees', 'object_value', 'relation_value')
            ->wherePivot('object_key', '=', 'Kategori')
            ->wherePivot('relation_key', '=', 'Yazi');
    }
}
