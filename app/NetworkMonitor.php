<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NetworkMonitor extends Model
{
    use HasFactory;

    public static function pinger($address){
        if(strtolower(PHP_OS)=='winnt'){
            $command = "ping -n 1 $address";
            exec($command, $output, $status);
        }else{
            $command = "ping -c 1 $address";
            exec($command, $output, $status);
        }
        
        $results = [
            'status' => $status === 0 ? 'online' : 'unreachable',
            'ping' => explode(" ", $output[7])[count(explode(" ", $output[7])) - 1]
        ];

        return $results;
    }
}
