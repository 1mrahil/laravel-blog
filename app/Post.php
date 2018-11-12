<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //primary key
    public $primaryKey = 'id';

    public $timestamps = true;
}

