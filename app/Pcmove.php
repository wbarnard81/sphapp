<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pcmove extends Model
{
    protected $fillable = ['from_name', 'to_name', 'from_site', 'to_site', 'move_date', 'contact_details'];
}
