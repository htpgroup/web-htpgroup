<?php

namespace App\Services\Telegram;

//use Longman\TelegramBot\Request;
use App\Models\Customer;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;
use App\Models\User;

class TelegramBot
{
    /**
     * Return random gif image
     *
     * @return string
     */
    protected static function gif()
    {
        $itemGif = rand(0, 12);
        $urlGif = '';

        return $urlGif;
    }

    protected static function sendMessage($id, $text)
    {
        return Telegram::sendMessage([
            'chat_id' => $id,
            'text' => $text,
            'parse_mode' => 'html'
        ]);
    }

    public static function sendAnimation($id)
    {
        $filename = 'my-photo.jpg';
        return Telegram::sendAnimation([
            'chat_id' => $id,
            'animation' => InputFile::create(self::gif(), $filename),
        ]);
    }

    public static function sendPhoto()
    {
        $pathPhoto = '';
        //$pathPhoto = 'https://media.giphy.com/media/MXQnyEQwBJ6eTj90L5/giphy.gif';
        $filename = 'my-photo.jpg';
        Telegram::sendPhoto([
            'chat_id' => '706659637',
            'photo' => InputFile::create($pathPhoto, $filename),
            'caption' => 'Xin chào.',
            'disable_notification' => true,
        ]);
    }

    public static function sendPostPhoto($telegram_id, $image)
    {
        $pathPhoto = $image;
        $filename = 'my-photo.jpg';
        Telegram::sendPhoto([
            'chat_id' => $telegram_id,
            'photo' => InputFile::create($pathPhoto, $filename),
            'disable_notification' => true,
            'caption' => 'Ảnh bài viết,'
        ]);
    }

    /**
     * @param User $user
     * @param Customer $customer
     *
     * @return void
     */
    public static function sendCongratMessage($user, $customer)
    {
        if (!$user->telegram_id) {
            return;
        }

        $msg = new BotMessage($user, $customer);

        self::sendMessage($user->telegram_id, $msg->content());
        self::sendAnimation($user->telegram_id);
    }
}
