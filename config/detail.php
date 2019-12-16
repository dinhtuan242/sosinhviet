<?php

    return [
        'author' => env('APP_AUTHOR', 'Vũ Đình Tuân'),
        'keywords' => env('APP_KEYWORDS', 'Sơ Sinh Việt, Hàng trẻ em, Đồ trẻ em, Sữa cho trẻ sơ sinh, Sơ sinh'),
        'facebook_link' => env('FACEBOOK_LINK', 'https://www.facebook.com/sosinhviet/'),
        'description' => env('APP_DESCRIPTION'),
        'accesstrade_authorization' => env('AUTHORIZATION'),
        'content_type' => env('CONTENT_TYPE'),
        'campaign' => [
            1 => [
                'name' => 'concung',
                'website' => 'concung.com',
            ],
            2 => [
                'name' => 'bibabo',
                'website' => 'bibabo.vn',
            ],
            3 => [
                'name' => 'shopee',
                'website' => 'shopee.vn',
            ],
            4 => [
                'name' => 'kolabayy.myharavan.com',
                'website' => 'kolabay.com.au',
            ]
        ]
    ];
