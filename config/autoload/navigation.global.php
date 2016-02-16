<?php

return array(
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Home',
                'route' => 'home',
            ),
            array(
                'label' => 'Login',
                'route' => 'scn-social-auth-user/login',
            ),
            array(
                'label' => 'Upload',
                'route' => 'upload',
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
    ),
);
