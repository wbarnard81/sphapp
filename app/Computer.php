<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'computers';

    /**
     * @var array $fillable
     */
    protected $fillable = ['serialnumber', 'username', 'hostname', 'manufacturer', 'model', 'cpumodel', 'memory', 'email', 'officetype', 'officekey'];

    /**
     * @var string $primaryKey
     */
    public $primaryKey = 'id';
    
    /**
     * @var string $serialNumber
     */
    public $serialNumber = 'serialnumber';
}

