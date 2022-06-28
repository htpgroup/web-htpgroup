<?php

namespace App\Dictionaries\Payment;

/*
 *
 * Trạng thái
 * Chưa xác nhận
 * Tạm giữ
 * Đã hủy
 * Thành công
 * Đang chờ xử lý
 * Đã hoàn tiền
 * Đóng băng
 *
 * @created 2021/12/08
 * */

class TransactionStatus
{
    const INCOMPLE = 0;

    const COMPLETE = 4;

    public static function all()
    {
        return [
            self::INCOMPLE => __('Male'),
            self::COMPLETE => __('Female'),
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
