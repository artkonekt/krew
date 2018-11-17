<?php

return [
    'event_listeners' => true,
    'views'           => [
        'namespace' => 'krew'
    ],
    'routes' => [
        'prefix'     => 'krew',
        'as'         => 'krew.',
        'middleware' => ['web', 'auth', 'acl'],
        'files'      => ['web']
    ],
    'breadcrumbs' => true
];
