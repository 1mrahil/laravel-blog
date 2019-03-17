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
        'cover_image'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

