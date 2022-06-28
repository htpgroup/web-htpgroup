<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries\Cms;

use App\Dictionaries\AppDomain;

class CategoryType
{
    //Category Type
    const ABOUT = 100;

    const PRODUCT = 101;

    const STORE = 121;

    const PROJECT = 102;

    const SERVICE = 103;

    const BLOG = 104;

    const HELP = 105;

    const PAGE = 106;

    const CAREERS = 107;

    const IMAGE = 108;

    const VIDEO = 109;

    const INFORMATON = 110;

    const COLOR = 1;

    const JOB = 2;

    //Euro Security
    const EURO_SECURITY_SEVICE = 3;

    const EURO_SECURITY_MEDIA = 4;

    const EURO_SECURITY_ACTION = 5;

    const EURO_SECURITY_IMAGE = 6;

    const EURO_SECURITY_VIDEO = 7;

    const EURO_SECURITY_RECRUITMENT = 8;

    const EURO_SECURITY_TRAINING = 9;

    //Blog
    const EURO_BLOG_ABOUT = 10;

    const EURO_BLOG_POST = 11;

    const EURO_BLOG_VIDEO = 12;

    const EURO_BLOG_IMAGE = 13;

    //StarToday
    const EURO_NEWS_ABOUT = 50;

    const EURO_NEWS_POST = 51;

    const EURO_NEWS_VIDEO = 52;

    const EURO_NEWS_IMAGE = 53;

    //Chuyên mục
    const EURO_NEWS_CATEGORY_HOME = 70;

    const EURO_NEWS_CATEGORY_GENERAL = 60;

    const EURO_NEWS_CATEGORY_SPORT = 61;

    const EURO_NEWS_CATEGORY_MEDIA = 62;

    const EURO_NEWS_CATEGORY_BUSINESS = 63;

    const EURO_NEWS_CATEGORY_TECHNOLOGY = 64;

    const EURO_NEWS_CATEGORY_ART = 65;

    const EURO_NEWS_CATEGORY_HEALTH = 66;

    const EURO_NEWS_CATEGORY_LIFESTYLE = 67;

    const EURO_NEWS_CATEGORY_MULTICULTURAL = 68;

    const EURO_NEWS_CATEGORY_TRADE = 69;

    //Store
    const FRUIT_STORE_ABOUT = 20;

    const FRUIT_STORE_PRODUCT = 14;

    const FRUIT_STORE_SERVICE = 26;

    const FRUIT_STORE_CATEGORY = 15;

    const FRUIT_STORE_BLOG = 16;

    const FRUIT_STORE_MEDIA = 22;

    const FRUIT_STORE_RECRUITMENT = 17;

    const FRUIT_STORE_OFFER = 23;

    const FRUIT_STORE_IMAGE = 18;

    const FRUIT_STORE_VIDEO = 19;

    const FRUIT_STORE_PAGE = 21;

    const FRUIT_STORE_INFORMATION = 28;

    const FRUIT_STORE_PRODUCT_BAG = 24;

    const FRUIT_STORE_PRODUCT_DRINK = 25;

    const FRUIT_STORE_ACTION = 125;

    const FRUIT_STORE_TRAINING = 125;

    //Space Golf
    const SPACE_GOLF_ABOUT = 301;

    const SPACE_GOLF_PRODUCT = 302;

    const SPACE_GOLF_SERVICE = 303;

    const SPACE_GOLF_CATEGORY = 304;

    const SPACE_GOLF_BLOG = 305;

    const SPACE_GOLF_MEDIA = 306;

    const SPACE_GOLF_RECRUITMENT = 307;

    const SPACE_GOLF_OFFER = 308;

    const SPACE_GOLF_IMAGE = 309;

    const SPACE_GOLF_VIDEO = 310;

    const SPACE_GOLF_PAGE = 311;

    const SPACE_GOLF_INFORMATION = 312;

    const SPACE_GOLF_PRODUCT_BAG = 313;

    const SPACE_GOLF_PRODUCT_DRINK = 314;

    //Golf Product Category Type
    //Đồ tập
    const WORK_OUT = 251;

    //Túi
    const HANDBAG = 252;

    //Giày golf
    const SHOE = 253;

    //Thời trang
    const FAHSHION = 254;

    //Phụ kiện
    const ACCESSORY = 255;

    //Gậy golf
    const STICK = 256;

    public static function all()
    {
        return [
            self::COLOR => 'Color',
            self::JOB => 'Việc Làm',

            self::EURO_SECURITY_SEVICE => 'Dịch Vụ',
            self::EURO_SECURITY_MEDIA => 'Thư viện',
            self::EURO_SECURITY_ACTION => 'Hoạt động',
            self::EURO_SECURITY_IMAGE => 'Hình ảnh',
            self::EURO_SECURITY_VIDEO => 'Video',
            self::EURO_SECURITY_RECRUITMENT => 'Tuyển dụng',
            self::EURO_SECURITY_TRAINING => 'Đào tạo',

            //Blog
            self::EURO_BLOG_ABOUT => 'Giới thiệu',
            self::EURO_BLOG_POST => 'Bài viết',
            self::EURO_BLOG_VIDEO => 'Video',
            self::EURO_BLOG_IMAGE => 'Hình ảnh',
            //Euro New
            self::EURO_NEWS_ABOUT => 'Giới thiệu',
            self::EURO_NEWS_POST => 'Tin tức',
            self::EURO_NEWS_VIDEO => 'Video',
            self::EURO_NEWS_IMAGE => 'Hình ảnh',

            self::ABOUT => 'Giới thiệu',
            self::PRODUCT => 'Sản phẩm',
            self::PROJECT => 'Dự án',
            self::SERVICE => 'Dịch vụ',
            self::BLOG => 'Tin tức',
            self::HELP => 'Trợ giúp',
            self::PAGE => 'Trang',
            self::CAREERS => 'Tuyển dụng',
            self::INFORMATON => 'Thông tin',

            //Fruit
            self::FRUIT_STORE_ABOUT => 'About',
            self::FRUIT_STORE_PRODUCT => 'Sản phẩm',
            self::FRUIT_STORE_CATEGORY => 'Danh mục',
            self::FRUIT_STORE_SERVICE => 'Dịch vụ',
            self::FRUIT_STORE_BLOG => 'Tin tức',
            self::FRUIT_STORE_MEDIA => 'Media',
            self::FRUIT_STORE_RECRUITMENT => 'Tuyển dụng',
            self::FRUIT_STORE_OFFER => 'Khuyến mại',
            self::FRUIT_STORE_IMAGE => 'Hình ảnh',
            self::FRUIT_STORE_VIDEO => 'Video',
            self::FRUIT_STORE_PAGE => 'Trang con',
            self::FRUIT_STORE_PRODUCT_BAG => 'Giỏ hoa quả',
            self::FRUIT_STORE_PRODUCT_DRINK => 'Đồ uống công nghệ',
            self::FRUIT_STORE_INFORMATION => 'Thông tin',

            self::WORK_OUT => 'Đồ tập',
            self::HANDBAG => 'Túi Golf',
            self::STICK => 'Gậy Golf',
            self::SHOE => 'Giày Golf',
            self::FAHSHION => 'Thời Trang',
        ];
    }

    /*
     * Euro security Type
     * */
    public static function euroSecurityType()
    {
        return [

            self::EURO_SECURITY_SEVICE => 'Dịch Vụ',
            self::EURO_SECURITY_MEDIA => 'Thư viện',
            self::EURO_SECURITY_ACTION => 'Hoạt động',

            self::EURO_BLOG_ABOUT => 'Giới thiệu',
            self::EURO_BLOG_POST => 'Bài viết',
            self::EURO_BLOG_VIDEO => 'Video',
            self::EURO_BLOG_IMAGE => 'Hình ảnh',
        ];
    }

    public static function getDefaultType()
    {
        $type = [
            self::ABOUT => 'Giới thiệu',
            self::PRODUCT => 'Thư viện',
            self::PROJECT => 'Dự án',
            self::BLOG => 'Tin tức',
            self::HELP => 'Trợ giúp',
            self::STORE => 'Sản phẩm',
            self::PAGE => 'Trang',
            self::CAREERS => 'Tuyển dụng',
        ];

        return $type;
    }

    public static function geGrouptDomainType()
    {
        return [
            AppDomain::BLOG => [
                self::ABOUT => 'Giới thiệu',
                self::PRODUCT => 'Thư viện',
                self::PROJECT => 'Dự án',
                self::BLOG => 'Tin tức',
                self::HELP => 'Trợ giúp',
                self::PAGE => 'Trang',
                self::CAREERS => 'Tuyển dụng',
            ],

            AppDomain::FINDER => [
                self::ABOUT => 'Giới thiệu',
                self::PRODUCT => 'Thư viện',
                self::PROJECT => 'Dự án',
                self::BLOG => 'Tin tức',
                self::HELP => 'Trợ giúp',
                self::PAGE => 'Trang',
                self::CAREERS => 'Tuyển dụng',
            ],

            AppDomain::ESTATE => [
                self::ABOUT => 'Giới thiệu',
                self::PRODUCT => 'Sản phẩm',
                self::PROJECT => 'Dự án',
                self::BLOG => 'Tin tức',
                self::HELP => 'Trợ giúp',
                self::PAGE => 'Trang',
                self::CAREERS => 'Tuyển dụng',
            ],

            AppDomain::JOB => [
                self::ABOUT => 'Giới thiệu',
                self::PRODUCT => 'Sản phẩm',
                self::PROJECT => 'Dự án',
                self::BLOG => 'Tin tức',
                self::HELP => 'Trợ giúp',
                self::PAGE => 'Trang',
                self::CAREERS => 'Tuyển dụng',
            ],

            AppDomain::CAR => [
                self::ABOUT => 'Giới thiệu',
                self::PRODUCT => 'Sản phẩm',
                self::PROJECT => 'Dự án',
                self::BLOG => 'Tin tức',
                self::HELP => 'Trợ giúp',
                self::PAGE => 'Trang',
                self::CAREERS => 'Tuyển dụng',
            ],

            AppDomain::CITY => [
                self::ABOUT => 'Giới thiệu',
                self::PRODUCT => 'Sản phẩm',
                self::PROJECT => 'Dự án',
                self::BLOG => 'Tin tức',
                self::HELP => 'Trợ giúp',
                self::PAGE => 'Trang',
                self::CAREERS => 'Tuyển dụng',
            ],

            AppDomain::EURO_NEW => [
                self::EURO_NEWS_ABOUT => 'Giới thiệu',
                self::EURO_NEWS_IMAGE => 'Hình ảnh',
                self::EURO_NEWS_VIDEO => 'Video',
                self::EURO_NEWS_POST => 'Tin tức',
            ],

            AppDomain::EURO_JOB => [
                self::EURO_NEWS_ABOUT => 'Giới thiệu',
                self::EURO_NEWS_IMAGE => 'Hình ảnh',
                self::EURO_NEWS_VIDEO => 'Video',
                self::EURO_NEWS_POST => 'Tin tức',
            ],

            AppDomain::EURO_SECURITY => [
                self::EURO_SECURITY_SEVICE => 'Dịch Vụ',
                self::EURO_SECURITY_MEDIA => 'Thư viện',
                self::EURO_SECURITY_ACTION => 'Hoạt động',
            ],

            AppDomain::EURO_BLOG => [
                self::EURO_BLOG_ABOUT => 'Giới thiệu',
                self::EURO_BLOG_POST => 'Bài viết',
                self::EURO_BLOG_VIDEO => 'Video',
                self::EURO_BLOG_IMAGE => 'Hình ảnh',
            ],

            AppDomain::FRUIT_STORE => [
                self::FRUIT_STORE_ABOUT => 'About',
                self::FRUIT_STORE_PRODUCT => 'Sản phẩm',
                self::FRUIT_STORE_CATEGORY => 'Danh mục',
                self::FRUIT_STORE_BLOG => 'Tin tức',
                self::FRUIT_STORE_RECRUITMENT => 'Tuyển dụng',
                self::FRUIT_STORE_OFFER => 'Khuyến mại',
                self::FRUIT_STORE_IMAGE => 'Hình ảnh',
                self::FRUIT_STORE_VIDEO => 'Video',
                self::FRUIT_STORE_PAGE => 'Page',
                self::FRUIT_STORE_INFORMATION => 'Thông tin',
            ],

            AppDomain::HOANG_LINH_NHI => [
                self::FRUIT_STORE_ABOUT => 'About',
                self::FRUIT_STORE_PRODUCT => 'Sản phẩm',
                self::FRUIT_STORE_SERVICE => 'Dịch vụ',
                self::FRUIT_STORE_CATEGORY => 'Danh mục',
                self::FRUIT_STORE_BLOG => 'Tin tức',
                self::FRUIT_STORE_RECRUITMENT => 'Tuyển dụng',
                self::FRUIT_STORE_OFFER => 'Khuyến mại',
                self::FRUIT_STORE_IMAGE => 'Hình ảnh',
                self::FRUIT_STORE_VIDEO => 'Video',
                self::FRUIT_STORE_PAGE => 'Page',
            ],

            AppDomain::HOME_PAY => [
                self::FRUIT_STORE_ABOUT => 'About',
                self::FRUIT_STORE_PRODUCT => 'Sản phẩm',
                self::FRUIT_STORE_SERVICE => 'Dịch vụ',
                self::FRUIT_STORE_CATEGORY => 'Danh mục',
                self::FRUIT_STORE_BLOG => 'Tin tức',
                self::FRUIT_STORE_RECRUITMENT => 'Tuyển dụng',
                self::FRUIT_STORE_OFFER => 'Khuyến mại',
                self::FRUIT_STORE_IMAGE => 'Hình ảnh',
                self::FRUIT_STORE_VIDEO => 'Video',
                self::FRUIT_STORE_PAGE => 'Page',
            ],

            AppDomain::SPACE_GOLF => [
                self::FRUIT_STORE_ABOUT => 'About',
                self::FRUIT_STORE_PRODUCT => 'Sản phẩm',
                self::FRUIT_STORE_SERVICE => 'Dịch vụ',
                self::FRUIT_STORE_CATEGORY => 'Danh mục',
                self::FRUIT_STORE_BLOG => 'Tin tức',
                self::FRUIT_STORE_RECRUITMENT => 'Tuyển dụng',
                self::FRUIT_STORE_OFFER => 'Khuyến mại',
                self::FRUIT_STORE_IMAGE => 'Hình ảnh',
                self::FRUIT_STORE_VIDEO => 'Video',
                self::FRUIT_STORE_PAGE => 'Page',
            ],
        ];
    }

    public static function euroSecurityTypeBlog()
    {
        return [
            self::EURO_BLOG_ABOUT => 'Giới thiệu',
            self::EURO_BLOG_POST => 'Bài viết',
            self::EURO_BLOG_VIDEO => 'Video',
            self::EURO_BLOG_IMAGE => 'Hình ảnh',
        ];
    }

    public static function euroSecurityTypeAll()
    {
        return [
            self::EURO_SECURITY_SEVICE => 'Dịch Vụ',
            self::EURO_SECURITY_MEDIA => 'Thư viện',
            self::EURO_SECURITY_ACTION => 'Hoạt động',
            self::EURO_SECURITY_IMAGE => 'Hình ảnh',
            self::EURO_SECURITY_VIDEO => 'Video',
            self::EURO_SECURITY_RECRUITMENT => 'Tuyển dụng',
            self::EURO_SECURITY_TRAINING => 'Đào tạo',
        ];
    }

    public static function spaceGolfTypeAll($type = 1)
    {
        return [
            self::WORK_OUT => 'Đồ tập',
            self::HANDBAG => 'Túi golf',
            self::SHOE => 'Giày golf',
            self::STICK => 'Gậy golf',
            self::ACCESSORY => 'Phụ kiện',
            self::FAHSHION => 'Thời trang',
        ];
    }

    public static function euroSecurityTypeAllGroup()
    {
        return [
            AppDomain::EURO_SECURITY => [
                self::EURO_SECURITY_SEVICE => 'Dịch Vụ',
                self::EURO_SECURITY_MEDIA => 'Thư viện',
                self::EURO_SECURITY_ACTION => 'Hoạt động',
                self::EURO_SECURITY_IMAGE => 'Hình ảnh',
                self::EURO_SECURITY_VIDEO => 'Video',
                self::EURO_SECURITY_RECRUITMENT => 'Tuyển dụng',
                self::EURO_SECURITY_TRAINING => 'Đào tạo',
            ],

            AppDomain::EURO_BLOG => [
                self::EURO_BLOG_ABOUT => 'Giới thiệu',
                self::EURO_BLOG_POST => 'Bài viết',
                self::EURO_BLOG_VIDEO => 'Video',
                self::EURO_BLOG_IMAGE => 'Hình ảnh',
            ],

            AppDomain::SPACE_GOLF => [
                self::FRUIT_STORE_ABOUT => 'About',
                self::FRUIT_STORE_PRODUCT => 'Sản phẩm',
                self::FRUIT_STORE_SERVICE => 'Dịch vụ',
                self::FRUIT_STORE_CATEGORY => 'Danh mục',
                self::FRUIT_STORE_BLOG => 'Tin tức',
                self::FRUIT_STORE_RECRUITMENT => 'Tuyển dụng',
                self::FRUIT_STORE_OFFER => 'Khuyến mại',
                self::FRUIT_STORE_IMAGE => 'Hình ảnh',
                self::FRUIT_STORE_VIDEO => 'Video',
                self::FRUIT_STORE_PAGE => 'Page',
                self::WORK_OUT => 'Đồ tập',
                self::HANDBAG => 'Túi Golf',
                self::SHOE => 'Giày Golf',
                self::FAHSHION => 'Thời trang',
                self::ACCESSORY => 'Phụ kiện',
            ],

            AppDomain::FRUIT_STORE => [
                self::FRUIT_STORE_ABOUT => 'About',
                self::FRUIT_STORE_PRODUCT => 'Sản phẩm',
                self::FRUIT_STORE_CATEGORY => 'Danh mục',
                self::FRUIT_STORE_BLOG => 'Tin tức',
                self::FRUIT_STORE_RECRUITMENT => 'Tuyển dụng',
                self::FRUIT_STORE_OFFER => 'Khuyến mại',
                self::FRUIT_STORE_IMAGE => 'Hình ảnh',
                self::FRUIT_STORE_VIDEO => 'Video',
                self::FRUIT_STORE_PAGE => 'Page',
                self::FRUIT_STORE_PRODUCT_BAG => 'Giỏ hoa quả',
                self::FRUIT_STORE_PRODUCT_DRINK => 'Đồ uống công nghệ',
            ],

            AppDomain::EURO_NEW => [
                self::FRUIT_STORE_ABOUT => 'About',
                self::FRUIT_STORE_PRODUCT => 'Sản phẩm',
                self::FRUIT_STORE_CATEGORY => 'Danh mục',
                self::FRUIT_STORE_BLOG => 'Tin tức',
                self::FRUIT_STORE_RECRUITMENT => 'Tuyển dụng',
                self::FRUIT_STORE_OFFER => 'Khuyến mại',
                self::FRUIT_STORE_IMAGE => 'Hình ảnh',
                self::FRUIT_STORE_VIDEO => 'Video',
                self::FRUIT_STORE_PAGE => 'Page',
                self::FRUIT_STORE_PRODUCT_BAG => 'Giỏ hoa quả',
                self::FRUIT_STORE_PRODUCT_DRINK => 'Đồ uống công nghệ',
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
