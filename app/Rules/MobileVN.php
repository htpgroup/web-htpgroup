<?php
/**
 * @link https://github.com/phpviet/validation
 *
 * @copyright (c) PHP Viet
 * @license [MIT](https://opensource.org/licenses/MIT)
 */

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MobileVN implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //return (strtoupper($value) === $value);
        return strtr('~^(\+?84|0)(::head::)\d{7}$~', [
            '::head::' => implode('|', [
                '3[2-9]',
                '5[2689]',
                '7[06-9]',
                '8[1-9]',
                '9[0-9]',
            ]),
        ]);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Số điện thoại không hợp lệ.';
    }

    public static function pregFormat(): string
    {
        return strtr('~^(\+?84|0)(::head::)\d{7}$~', [
            '::head::' => implode('|', [
                '3[2-9]',
                '5[2689]',
                '7[06-9]',
                '8[1-9]',
                '9[0-9]',
            ]),
        ]);
    }
}
