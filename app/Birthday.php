<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Birthday extends Model
{

    protected $fillable = ['firstname', 'lastname', 'birthday', 'site'];

    protected $dates = ['birthday'];

    public function scopeBirthdays($query)
    {
        return $query->whereRaw('birthday like "%-' . now()->format('m') . '-%"');
    }

    public function setBirthdayAttribute($birthday)
    {
        $this->attributes['birthday'] = Carbon::parse($birthday);
    }
}
