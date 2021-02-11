<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
            'country' => 'c,u,r,d',
            'city' => 'c,u,r,d',
            'pointOfInterest' => 'c,u,r,d',
            'hotel' => 'c,u,r,d',
            'resturant' => 'c,u,r,d',
            'channel' => 'c,r,u,d',
            'admins' => 'c,r,u',
            'posts' => 'c,r,u,d',
        ],
        'user' => [
            'profile' => 'r,u',
            'posts' => 'c,r,u,d',
            'plans' => 'c,r,u,d',
        ],

    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];