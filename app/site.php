<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class site extends Model
{
    // table name
    protected $table = 'site';

    // primary key
    protected $primaryKey = 'id';

    // turn off time stamp
    public $timestamps = false;

    protected $fillable = [
        'name', 'logoID','site_details'
    ];
}
