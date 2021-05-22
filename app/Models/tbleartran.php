<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tbleartran extends Model
{
    //
    public $table = 'tbleartran';

    protected $fillable = ['id','dt_tm_issue','issuepurpose','remarks','issuer_id','signature'];
}
