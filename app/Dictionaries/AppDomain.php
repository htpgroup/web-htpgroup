<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries;


class AppDomain
{
    const BLOG = 1;
    const STARTUP = 2;
    const STUDY = 3;

    const FINDER = 4;
    const ESTATE = 5;
    const JOB = 6;
    const CAR = 7;
    const CITY = 8;

    const EURO_GROUP = 14;
    const EURO_SECURITY = 9;
    const EURO_JOB = 10;
    const EURO_BLOG = 11;
    const EURO_NEW = 12;
    const EURO_HOTEL = 13;

    //Store
    const SHOP_STORE = 100;
    const STORE_ECOMMERCE = 101;
    const FRUIT_STORE = 15;
    const HOANG_LINH_NHI = 16;

    //Công ty cổ phần nông nghiệp sông hồng
    const SHAS = 17;
    const SUPER_MARKET = 18;
    const ACCOUNT = 19;
    const MERCHANT = 20;
    const CHECKOUT = 21;

    //Home Pay
    const HOME_PAY = 22;
    const HOME_HTP = 23;
    const HOME_CHECKOUT = 24;

    const SPACE_GOLF = 50;


    public static function all()
    {
        return [
            self::BLOG => 'Home Blog',
            self::STARTUP => 'Home Startup',
            self::STUDY => 'Home Study',
            self::ACCOUNT => 'Tài khoản',
            self::MERCHANT => 'Doanh nghiệp',
            self::CHECKOUT => 'Thanh toán',

            //Finder
            self::ESTATE => 'Estate Finder',
            self::JOB => 'Job Finder',
            self::CAR => 'Car Finder',
            self::CITY => 'City Finder',
            self::FINDER => 'Finder',

            //Euro
            self::EURO_GROUP => 'Euro Group',
            self::EURO_SECURITY => 'Euro Security',
            self::EURO_JOB => 'Euro Job',
            self::EURO_BLOG => 'Euro Blog',
            self::EURO_NEW => 'Euro News',
            self::EURO_HOTEL => 'Euro Hotel',

            //Store
            self::SHOP_STORE => 'Shop Store',
            self::STORE_ECOMMERCE => 'Store eCommerce ',
            self::FRUIT_STORE => 'saigon360hn.com',
            self::HOANG_LINH_NHI => 'Hoàng Linh Nhi',

            self::SHAS => 'Shas',
            self::SPACE_GOLF => 'Space Golf',

            self::SUPER_MARKET => 'Siêu thị',

            self::HOME_PAY => 'Omipay Payment',
            self::HOME_HTP => 'HTP Group',
            self::HOME_CHECKOUT => 'Checkout',

        ];
    }

    /*
     * Group Domain
     *
     * */
    public static function euroGroupDomain()
    {
        return [
            self::EURO_SECURITY => 'Euro Security',
            self::EURO_JOB => 'Euro Job',
            self::EURO_BLOG => 'Blog',
            self::EURO_NEW => 'StarToday',
            self::FRUIT_STORE => 'saigon360hn.com',
            self::FINDER => 'Finder',
            self::HOANG_LINH_NHI => 'Hoàng linh nhi',
            self::SHAS => 'Shas'
        ];
    }

    /*
     * Finder domain
     * */
    public static function finderDomain()
    {
        return [
            self::FINDER => 'Finder',
            self::ESTATE => 'Estate',
            self::JOB => 'Job',
            self::CAR => 'Car',
            self::CITY => 'City',
        ];
    }

    /*
     * Công ty cổ phần nông nghệp sông hồng
     * */
    public static function shasDomain()
    {
        return [
            self::SHAS => 'Shas'
        ];
    }

    /*
    * Space golf
    * */
    public static function spacegolfDomain()
    {
        return [
            self::SPACE_GOLF => 'Space Golf'
        ];
    }

    /*
    * Space golf
    * */
    public static function fruitDomain()
    {
        return [
            self::SPACE_GOLF => 'Sài gòn 360'
        ];
    }


    public static function storeDomain()
    {
        return [
            self::FRUIT_STORE => 'Store',
        ];
    }

    public static function htpDomain()
    {
        return [
            self::HOME_HTP => 'HTP Group',
            self::HOME_PAY => 'Home Pay',
        ];
    }

    public static function invoiceTemplate($domain_id)
    {
        return 'invoice1';
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
