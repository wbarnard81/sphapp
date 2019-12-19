<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pcreturn extends Model
{
    protected $fillable = ['site', 'fullname', 'email', 'telephone', 'serialnumber', 'software', 'notes'];
}
