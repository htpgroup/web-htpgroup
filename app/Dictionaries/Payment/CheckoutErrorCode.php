<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 11/25/2022
 * Time: 10:31 AM
 */

namespace App\Dictionaries\Payment;

/*
 * Mã lỗi thanh toán
 * */

class CheckoutErrorCode
{
    const OM = 0;

    public static function all()
    {
        return [
            self::OM => __('Male'),
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

    public static function getListErrorCode()
    {
        $arrCode = [
            0 => 'Không có lỗi',
            99 => 'Lỗi không được định nghĩa hoặc không rõ nguyên nhân',
            2 => 'Địa chỉ IP của merchant gọi tới không được chấp nhận',
            3 => 'Sai tham số gửi tới (có tham số sai tên hoặc kiểu dữ liệu)',
            4 => 'Tên hàm API do merchant gọi tới không hợp lệ (không tồn tại)',
            5 => 'Sai version của API',
            6 => 'Mã merchant không tồn tại hoặc chưa được kích hoạt',
            7 => 'Sai mật khẩu của merchant',
            8 => 'Tài khoản người bán hàng không tồn tại',
            9 => 'Tài khoản người nhận tiền đang bị phong tỏa',
            10 => 'Hóa đơn thanh toán không hợp lệ',
            11 => 'Số tiền thanh toán không hợp lệ',
            12 => 'Đơn vị tiền tệ không hợp lệ',
            29 => 'Token không tồn tại',
            80 => 'Không thêm được đơn hàng',
            81 => 'Đơn hàng chưa được thanh toán',
            110 => 'Địa chỉ email tài khoản nhận tiền không phải email chính',
            111 => 'Tài khoản nhận tiền đang bị khóa',
            113 => 'Tài khoản nhận tiền chưa cấu hình là người bán nội dung số',
            114 => 'Giao dịch đang thực hiện, chưa kết thúc',
            115 => 'Giao dịch bị hủy',
            118 => 'tax_amount không hợp lệ',
            119 => 'discount_amount không hợp lệ',
            120 => 'fee_shipping không hợp lệ',
            121 => 'return_url không hợp lệ',
            122 => 'cancel_url không hợp lệ',
            123 => 'items không hợp lệ',
            124 => 'transaction_info không hợp lệ',
            125 => 'quantity không hợp lệ',
            126 => 'order_description không hợp lệ',
            127 => 'affiliate_code không hợp lệ',
            128 => 'time_limit không hợp lệ',
            129 => 'buyer_fullname không hợp lệ',
            130 => 'buyer_email không hợp lệ',
            131 => 'buyer_mobile không hợp lệ',
            132 => 'buyer_address không hợp lệ',
            133 => 'total_item không hợp lệ',
            134 => 'payment_method, bank_code không hợp lệ',
            135 => 'Lỗi kết nối tới hệ thống ngân hàng',
            140 => 'Đơn hàng không hỗ trợ thanh toán trả góp',

        ];
    }
}
