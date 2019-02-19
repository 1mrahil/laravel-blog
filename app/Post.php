<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //primary key
    public $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'body',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

