<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    protected $fillable = [
        'title', 'slug', 'body'
    ];

    public function status(){
        return $this->belongsTo('App\PageStatus', 'status_id', 'id');
    }
}
