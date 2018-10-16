<?php

// This is the database connection configuration.
return array(
    'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
    
    'connectionString' => 'mysql:host=localhost;dbname=meuBanco',
    'emulatePrepare' => true,
    'username' => 'Marcos',
    'password' => '123456',
    'charset' => 'utf8',	
);