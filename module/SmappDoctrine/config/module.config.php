<?php
return array(
    'smapp_doctrine' => array(
        'connection' => array(
            'driver'  => 'pdo_mysql',
            'host'    => 'localhost',
            'user'    => 'root',
            'password'=> '',
            'dbname'  => 'test',
            'charset' => 'UTF-8',
            'driver_options' => array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'SmappDoctrine'       => 'SmappDoctrine\Service\SmappDoctrineFactory',
         ),
        'aliases' => array (
            
        ),
        'invokables' => array(
            //'orm_cache_array'
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
    ),
    ),
);
