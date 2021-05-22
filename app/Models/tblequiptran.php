<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tblequiptran extends Model
{
    //
    public $table = 'tblequiptran';

    protected $fillable = ['id','pid','sn','tranid'];
}
