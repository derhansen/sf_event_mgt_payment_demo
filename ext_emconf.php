<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Event management and registration - Payment Demo',
    'description' => 'Demo extension for payment integration in ext:sf_event_mgt',
    'category' => 'fe',
    'author' => 'Torben Hansen',
    'author_email' => 'derhansen@gmail.com',
    'state' => 'stable',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '6.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.4.0-11.5.99',
            'sf_event_mgt' => '6.0.0-6.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
