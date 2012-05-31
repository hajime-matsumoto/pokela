<?php
// production envを継承
$config = include dirname(__FILE__).'/app_production.php';

// For PHP Settings
$config['php']['ini']['display_errors'] = 1;

/*
$config['db']['name'] = 'visty_develop';


 */

// For Logger Settings
$config['log']['reportingLevel'] = Seaf_Log::LEVEL_ALL;
$config['log']['handlers'] = array(
    array(
        'type' => 'flush',
        'resource' => null,
        //'level' => Seaf_Log::LEVEL_ALL ^ Seaf_Log::LEVEL_NOTICE ^ Seaf_Log::LEVEL_DEBUG
        'level' => Seaf_Log::LEVEL_ALL ^ Seaf_Log::LEVEL_DEBUG
    ),
    array(
        'type' => 'file',
        'resourse' => array( 
            'file' => APP_PATH . SEAF_DS .'log'. SEAF_DS.'out.log'
        ),
        'level' =>  Seaf_Log::LEVEL_ALL
    )
);


return $config;
?>
