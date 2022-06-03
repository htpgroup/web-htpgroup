<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries\EuroGroup\EuroSecure;


use phpDocumentor\Reflection\Types\Self_;

class SecureServiceCategory
{
    const SERVCICE_COMPANY = 1;
    const SERVCICE_PERSONAL = 2;
    const SERVCICE_QUALITY = 3;
    const SERVCICE_OTHER = 4;

    public static function all()
    {
        return [
            self::SERVCICE_COMPANY => 'Dành Cho doanh nghiệp',
            self::SERVCICE_PERSONAL => 'Dành Cho các nhân',
            self::SERVCICE_QUALITY => 'Dịch vụ bảo vệ chất lượng cao',
            self::SERVCICE_OTHER => 'Dịch vụ khác',
        ];
    }

    public static function listItem()
    {
        return [
            [
                'id' => self::SERVCICE_COMPANY,
                'title' => 'Dành Cho doanh nghiệp',
                'slug' => 'danh-cho-doanh-nghiep'
            ],
            [
                'id' => self::SERVCICE_PERSONAL,
                'title' => 'Dành Cho cá nhân',
                'slug' => 'danh-cho-ca-nhan'
            ],
            [
                'id' => self::SERVCICE_QUALITY,
                'title' => 'Dịch vụ bảo vệ chất lượng cao',
                'slug' => 'dich-vu-bao-ve-chat-luong-cao'
            ],
            [
                'id' => self::SERVCICE_OTHER,
                'title' => 'Dịch vụ khác',
                'slug' => 'dich-vu-khac'
            ],
        ];
    }

    public static function get($type)
    {
        $all = self::all();

        if (isset($all[$type])) {
            return $all[$type];
        }

        return '';
    }
}
