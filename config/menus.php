<?php

use App\Utility\Sidebar;

$menus = [
    'visitor' => [
        [
            'type'  => 'header',
            'header' => 'Welcome to CakeAdminLTE'
        ],
        [
            'type'  => 'link',
            'link'  => 'Click To Register',
            'icon'  => 'fa-pencil-square',
            'path'  => '/register'
        ],
        [
            'type'  => 'group',
            'group' => 'Visitor Menu',
            'icon'  => 'fa-map',
            'css'   => 'active non-active',
            'menu'  => [
                'Home' => [
                    'path' => '/',
                    'icon' => 'fa-home',
                ],
                'Products' => [
                    'path' => '/products',
                    'icon' => 'fa-binoculars'
                ],
                'Pricing' => [
                    'path' => '/pricing',
                    'icon' => 'fa-money',
                ],
                'About' => [
                    'path' => '/about',
                    'icon' => 'fa-flag'
                ],
                'Company' => [
                    'path' => '/company',
                    'icon' => 'fa-cogs'
                ],
                'Investors' => [
                    'path' => '/investors',
                    'icon' => 'fa-line-chart'
                ],
            ]
        ],
        [
            'type'  => 'group',
            'group' => 'User Menu',
            'icon'  => 'fa-user',
            'css'   => 'active non-active',
            'menu'  => [
                'Login'          => [
                    'path' => '/login',
                    'icon' => 'fa-sign-in',
                ],
                'Reset Password' => [
                    'path' => '/reset',
                    'icon' => 'fa-compass',
                ]
            ]
        ]

    ],
    'user' => [
        [
            'type'  => 'header',
            'header' => 'Welcome User'
        ],
        [
            'type'  => 'link',
            'link'  => 'Upgrade to Member',
            'icon'  => 'fa-fighter-jet',
            'path'  => '/profile'
        ],
        [
            'type'  => 'group',
            'group' => 'User Menu',
            'icon'  => 'fa-user',
            'css'   => 'active non-active',
            'menu' => [
                'Dashboard' => [
                    'path' => '/dashboard',
                    'icon' => 'fa-dashboard'
                ],
                'Profile' => [
                    'path' => '/profile',
                    'icon' => 'fa-briefcase',
                ],
                'Logout' =>[
                    'path' => '/logout',
                    'icon' => 'fa-sign-out',
                ]
            ]
        ],
        [
            'type'  => 'group',
            'group' => 'Support Menu',
            'icon'  => 'fa-support',
            'css'   => 'active non-active',
            'menu' => [
                'Live Chat' => [
                    'path' => '/chat',
                    'icon' => 'fa-wechat'
                ],
                'View Tickets'     => [
                    'path' => '/tickets',
                    'icon' => 'fa-folder-open'
                ],
                'Open Ticket'     => [
                    'path' => '/support',
                    'icon' => 'fa-magic'
                ]
            ]
        ]
    ],
    'member' => [
        [
            'type'  => 'header',
            'header' => 'Welcome Member'
        ],
        [
            'type'  => 'link',
            'link'  => 'Members Only',
            'icon'  => 'fa-rocket',
            'path'  => '/members/only'
        ],
        [
            'type'  => 'group',
            'group' => 'User Menu',
            'icon'  => 'fa-user',
            'css'   => 'active non-active',
            'menu' => [
                'Dashboard' => [
                    'path' => '/dashboard',
                    'icon' => 'fa-dashboard'
                ],
                'Profile' => [
                    'path' => '/profile',
                    'icon' => 'fa-briefcase',
                ],
                'Logout' =>[
                    'path' => '/logout',
                    'icon' => 'fa-sign-out',
                ]
            ]
        ],
        [
            'type'  => 'group',
            'group' => 'Support Menu',
            'icon'  => 'fa-support',
            'css'   => 'active non-active',
            'menu' => [
                'Live Chat' => [
                    'path' => '/chat',
                    'icon' => 'fa-wechat'
                ],
                'View Tickets'     => [
                    'path' => '/tickets',
                    'icon' => 'fa-folder-open'
                ],
                'Open Ticket'     => [
                    'path' => '/support',
                    'icon' => 'fa-magic'
                ]
            ]
        ]
    ],
    'admin' => [
        [
            'type'  => 'header',
            'header' => 'Welcome Admin'
        ],
        [
            'type'  => 'group',
            'group' => 'Admin Menu',
            'icon'  => 'fa-user',
            'css'   => 'active non-active',
            'menu' => [
                'Dashboard' => [
                    'path' => '/dashboard',
                    'icon' => 'fa-dashboard',
                    /*
                    'menu' => [
                        'Reporting' => [
                            'path' => '/dashboard/reporting',
                            'icon' => 'fa-dashboard',
                            'menu' => [
                                'Reporting 2' => [
                                    'path' => '/dashboard/reporting/2',
                                    'icon' => 'fa-dashboard'
                                ]
                            ]
                        ]
                    ]
                    */
                ],
                'Search Users' => [
                    'path'  => '/search/users',
                    'icon'  => 'fa-search'
                ],
                'View Users' => [
                    'path'  => '/admin/users',
                    'icon'  => 'fa-users'
                ],
                'Profile' => [
                    'path' => '/profile',
                    'icon' => 'fa-briefcase',
                ],
                'Logout' =>[
                    'path' => '/logout',
                    'icon' => 'fa-sign-out',
                ]
            ]
        ],
        [
            'type'  => 'group',
            'group' => 'Support Menu',
            'icon'  => 'fa-support',
            'css'   => 'active non-active',
            'menu' => [
                'Help & FAQ' => [
                    'path' => '/help',
                    'icon' => 'fa-question-circle'
                ],
                'View Chats' => [
                    'path' => '/openchats',
                    'icon' => 'fa-wechat'
                ],
                'View Tickets'     => [
                    'path' => '/tickets',
                    'icon' => 'fa-folder-open'
                ]
            ]
        ]
    ],
    'site' => [
        [
            'type'  => 'header',
            'header' => 'Sitewide Links'
        ],
        [
            'type'  => 'link',
            'link' => 'Help & FAQ',
            'path' => '/help',
            'icon' => 'fa-question-circle'
        ],
        [
            'type'  => 'link',
            'link'  => 'Contact Us',
            'icon'  => 'fa-bullhorn',
            'path'  => '/contact'
        ]
    ]
];

Sidebar::setMenu($menus);
Sidebar::buildMenu();