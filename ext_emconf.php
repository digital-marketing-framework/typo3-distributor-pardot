<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Digital Marketing Framework - Distributor - Pardot',
    'description' => 'Send form data to Pardot via form handlers',
    'category' => 'be',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'state' => 'stable',
    'version' => '3.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
            'dmf_distributor_request' => '3.0.0-3.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
