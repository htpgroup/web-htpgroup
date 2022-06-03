<?php

namespace App\Space\Domain;

class EuroSecurityHelper
{

    /*
     * Get Seo data
     *
     * @return array
     * */
    public static function getSeoData($user, $type = 1)
    {

        $seoData = [
            'title' => 'Euro Security - Dịch Vụ Vệ Sĩ Hàng Đầu Việt Nam',
            'description' => 'Euro Security - Dịch Vụ Vệ Sĩ Hàng Đầu Việt Nam',
            //'image' => url('/og_image.png'),
            'image' => 'https://res.cloudinary.com/dfeqcehdw/image/upload/v1634543597/photo_2021-10-18_14-41-04.jpg',
            'image_w' => 345,
            'image_h' => 345,
            'type' => 'website'
        ];

        return $seoData;
    }
}
