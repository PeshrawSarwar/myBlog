<?php

return [

    'roles_structure' => [
        'owner' => [
            'users'    => 'c,r,u,d',
            'post'     => 'c,r,u,d',
            'category' => 'c,r,u,d',
            'tag'      => 'c,r,u,d',
            'gallery'  => 'c,r,u,d',
            'setting'  => 'r,u',
            'profile'  => 'r,u',
            'contact'  => 'r,d',
        ],
        'super_admin' => [
            'post'     => 'c,r,u,d',
            'category' => 'c,r,u,d',
            'tag'      => 'c,r,u,d',
            'gallery'  => 'c,r,u,d',
            'setting'  => 'r,u',
            'profile'  => 'r,u',
            'contact'  => 'r,d',
        ],
        'admin' => [
            'post'     => 'c,r,u,d',
            'category' => 'c,r,u,d',
            'tag'      => 'c,r,u,d',
            'gallery'  => 'c,r,u,d',
            'profile'  => 'r,u',
            'contact'  => 'r,d',
        ],
        'author' => [
            'post'     => 'c,r,u',
            'category' => 'r',
            'tag'      => 'c,r',
            'gallery'  => 'c,r',
        ],
        'user' => [
            'post'     => 'r',
            'category' => 'r',
            'tag'      => 'r',
            'gallery'  => 'r',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
