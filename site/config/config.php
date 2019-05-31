<?php

return [
    'languages' => true,
    'debug'  => true,

    'routes' => [
        [
        'pattern' => 'work',
        'action'  => function () {
            $data = [
                'tag' => false,
            ];
                site()->visit(page('work'));
                return page('work')->render($data);
            }
        ],
        [
        'pattern' => 'work/tag/(:all)',
        'action'  => function ($all) {
            $data = [
                'tag' => $all,
            ];
                site()->visit(page('work'));
                return page('work')->render($data);
            }
        ],
    ],

];
