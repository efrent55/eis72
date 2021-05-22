<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offices extends Model
{
    //
    
    // protected $table = 'users';
    public $table = 'tbloffice';

    protected $fillable = ['id','name','location','grpid'];
    
}

