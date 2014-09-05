<?php

class Config
{
     public $appName = "Empleo Online";
     public $layout = "layouts/layoutmain";
     public $layoutadmin = "layouts/layout";
     public $debug = true;
     
     public $db = array(
         
         'sqlite' => array(
             'driver' => 'sqlite',
             'dbname' => '../app/data/test.sqlite',
         ),
         
         'mysql' => array(
             'driver' => 'mysql',
             'dbname' => 'test',
             'host' => 'localhost',
             'user' => 'root',
             'password' => 'zerocool',
         ), 
         
         'pgsql' => array(
             'driver' => 'pgsql',
             'dbname' => '',
             'host' => '',
             'port' => 5432,
             'user' => '',
             'password' => '',
         ),
         
         'sqlsrv' => array(
             'driver' => 'sqlsrv',
             'host' => '',
             'dbname' => '',
             'user' => '',
             'password' => '',
         ),
     );
     
     public $mailer = array(
         
         'gmail' => array(
             'isSMTP' => true,
             'SMTPAuth' => true,
             'SMTPSecure' => 'ssl',
             'Host' => 'smtp.gmail.com',
             'Port' => 465,
             'Username' => 'user@gmail.com',
             'Password' => 'password',
             'From' => 'user@gmail.com',
             'FromName' => 'Administrator',
         ),
         
         'hotmail' => array(
             'isSMTP' => true,
             'SMTPAuth' => true,
             'SMTPSecure' => 'tls',
             'Host' => 'smtp.live.com',
             'Port' => 25,
             'Username' => 'user@hotmail.com',
             'Password' => 'password',
             'From' => 'user@hotmail.com',
             'FromName' => 'Administrator',
         ),
         
     );
     
     public $DirectoryIndex = "index.php?r=user/login";
     public $ErrorPage = "index.php?r=user/error";
     
     public $rules = array(
         "user/index" => array(
             "?r=user/index" => "index",
             "?r=user/index&id=$1" => "index/id/([0-9]+)",
             "?r=user/index&id=$1&title=$2" => "index/id/([0-9]+)/title/([a-zA-Z]+)",
         ),
         
         "user/login" => array(
             "?r=user/login" => "login",
         ),
     );
}

