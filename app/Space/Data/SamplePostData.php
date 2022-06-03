<?php

namespace App\Space\Data;

class SamplePostData
{

    /*
     * Sample data
     * */
    public static function getSampleHerokuWebHook($command = '/login')
    {

    }

    /*
     * Cloudinary
     * */
    public static function getSampleCloudinaryWebHook($command = '/login')
    {

    }

    /*
     * Telegram Data
     * */
    public static function getSampleTelegramCommand($command = '/login')
    {
        $dataSample =
            [
                'update_id' => 684768049,
                'message' => [
                    'message_id' => 698,
                    'from' =>
                        [
                            'id' => 706659637,
                            'is_bot' => false,
                            'first_name' => 'Xuân Dũng',
                            'username' => 'dungphan00',
                            'language_code' => 'vi',
                        ],
                    'chat' =>
                        [
                            'id' => 706659637,
                            'first_name' => 'Xuân Dũng',
                            'username' => 'dungphan00',
                            'type' => 'private',
                        ],
                    'date' => 1628656018,
                    'text' => '/start',
                    'entities' =>
                        [
                            [
                                'offset' => 0,
                                'length' => 9,
                                'type' => 'bot_command',
                            ],
                        ],
                ]
            ];

        return $dataSample;
    }
}
