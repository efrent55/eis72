<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
    //
    protected $table = 'tblequipments';

    protected $fillable = ['id','serialnr','description','dt_acquired'];

    
}

