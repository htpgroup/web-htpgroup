<?php

namespace App\Dictionaries\Domain\Merchant;

class StatusType
{
    const HAND_METHOD = 1;
    const API_METHOD = 2;

    public static function all()
    {
        return [
            self::HAND_METHOD => 'thủ công',
            self::API_METHOD => 'api',
        ];
    }

    public static function allItem()
    {
        $arrType = [
            1 => "Chưa xác nhận",
            2 => "Tạm giữ",
            3 => "Đã huỷ",
            4 => "Thành công",
            6 => "Đang chờ xử lý",
            7 => "Đã hoàn tiền",
            8 => "Đóng băng",
        ];
        return $arrType;
    }

    public static function allItemStatus()
    {
        $arrType = [
            1 => "Chờ kích hoạt OTP",
            2 => "Đã kích hoạt, đang xử lý",
            3 => "Đã xử lý, nhưng thất bại",
            4 => "Đã thành công",
            5 => "Lỗi khi đang thực hiện giao dịch",
            6 => "Đang chờ xử lý",
        ];
        return $arrType;
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
