<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewClass extends Model
{
    protected $table        =   'newclass';
    protected $primaryKey   =   'newclass_id';
    public $timestamps = false;
}
