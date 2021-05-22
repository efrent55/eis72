<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tblequipclassification extends Model
{
    //
    //
    protected $table = 'tblequipclassification';

    protected $fillable = ['id','classification','readiness_cnt','dt_acquired'];
}
