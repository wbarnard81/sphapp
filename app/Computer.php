<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    public $primaryKey = 'id';
    public $serialNumber = 'serialnumber';
}
