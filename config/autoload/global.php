<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

$db = [];

    $dbConfig = [
        'driver'    => 'PdoMysql',
        'hostname'  => 'localhost',
        'database'  => 'zflogin',
        'username' => 'root',
        'password'  => '',
    ];
    

return array(
    'db' => $dbConfig,
    'scn-social-auth' => array(
        /*'facebook_client_id' => $_ENV['facebook_client_id'],
        'facebook_secret' => $_ENV['facebook_secret'],
        'google_client_id' => $_ENV['google_client_id'],
        'google_secret' => $_ENV['google_secret'],*/
        'twitter_consumer_key' => '2ltJrST8lYSZ6PrDupKh0gqBd',
        
      
        'twitter_consumer_secret' => 'h9EPuJrXmOoNzWIaF3hGrMBw6YosLFJu5YwYhPFhhmOq6L4BHs',
      
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
        'invokables' => array(
            'Zend\Session\SessionManager' => 'Zend\Session\SessionManager',
        ),
    ),
);
