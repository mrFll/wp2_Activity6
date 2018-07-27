<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    // table name
    protected $table = 'products';

    // primary key
    protected $primaryKey = 'id';

    // turn off time stamps
    public $timestamps = false;

    // inputs
    protected $fillable = [
        'name', 'comID', 'catID', 'price', 'status', 'details'
    ];

}
