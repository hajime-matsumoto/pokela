<?php
$config = array();
$config['prefix'] = 'Pokela';

$config['resourse']['front'] = array(
    'moduleDir'=>APP_PATH.SEAF_DS.'module',
    'controllerDir'=>APP_PATH.SEAF_DS.'controller',
    'appDir'=>APP_PATH,
    'prefix'=> $config['prefix']
);

// For DB Settings
$config['db'] = array(
    'type'=> Seaf_DB::TYPE_MYSQL,
    'host'=>'localhost',
    'user'=>'root',
    'password'=>'deganjue',
    'name'=>'pokela'
);

/*
$config['resourse']['layout'] = array(
    'dirname'=>'layout',
    'name'=>'layout.php'
);

$config['resourse']['front'] = array(
    'moduleDir'=>APP_PATH.SEAF_DS.'module',
    'controllerDir'=>APP_PATH.SEAF_DS.'controller',
    'appDir'=>APP_PATH,
    'prefix'=> $config['prefix']
);
$config['module'] = array(
    'paragraph' => array()
);

$config['php']['ini'] = array(
    'display_errors' => 1
);


// For Layout
$config['layout']['dirname'] = 'layout';
$config['layout']['name'] = 'layout.php';


// App directory
$config['path'] = array(
    'default' => realpath(dirname(__FILE__) . '/../'),
    'user' => realpath(dirname(__FILE__) . '/../')
);

// For DB Settings
$config['db'] = array(
    'type'=> Seaf_DB::TYPE_MYSQL,
    'host'=>'localhost',
    'user'=>'root',
    'password'=>'deganjue',
    'name'=>'visty'
);

// For Logger Settings
$config['log']['reportingLevel'] = Seaf_Log::LEVEL_WARNING & Seaf_Log::LEVEL_ERROR & Seaf_Log::LEVEL_FATAL;
$config['log']['handlers'] = array(
    array(
        'type' => 'file',
        'resourse' => array( 'file' => APP_PATH . SEAF_DS .'out.log'),
        'level' =>  Seaf_Log::LEVEL_ALL ^ ( Seaf_Log::LEVEL_DEBUG | Seaf_Log::LEVEL_LOG  | Seaf_Log::LEVEL_NOTICE )
    )
);
*/

return $config;
?>
