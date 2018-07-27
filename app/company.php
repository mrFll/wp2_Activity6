<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    // table name
    protected $table = 'company';

    // primary key
    protected $primaryKey = 'id';

    // turn time stamps off
    public $timestamps = false;

    // input variables
    protected $fillable = ['name'];
}
