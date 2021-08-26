<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //to change table name
    //protected $table = 'anyname'
    protected $table = 'posts'; //it is 'post' by default

    //to change primaryKey name
    //public $primaryKey = 'anyname';
    public $primaryKey = 'id'; //it is 'id' by default
}
