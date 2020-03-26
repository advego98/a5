<?php

namespace Rentit\Models;
use Illuminate\Database\Capsule\Manager as Capsule;

class DB{
    function __construct()
    {
        $capsule=new Capsule();
        $capsule->addConnection(
            [
                'driver'=>"mysql",
                'host'=>"localhost",
                'database'=>"dev_proyecto",
                'username'=>"root",
                'password'=>"linuxlinux",
                'charset'=>'utf8',
                'collation'=>'utf8_unicode_ci',
                'prefix'=>''
            ]
        );
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}