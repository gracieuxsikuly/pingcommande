<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Acamposm\Ping\Ping;
use Acamposm\Ping\PingCommandBuilder;


class PingController extends Controller
{
    public function pingtest(){
           // Create an instance of PingCommand
           $command = (new PingCommandBuilder('192.168.1.1'));
            // Pass the PingCommand instance to Ping and run...
           $ping = (new Ping($command))->run();
           dd($ping);
    }
}
