<?php

return [
    'secret' => env('GOOGLE_RECAPTCHA_SECRET', '6Les3lEgAAAAANJQ0ZoL__GZIYXRuo3r1Q1rOH7h'),
    'sitekey' => env('GOOGLE_RECAPTCHA_KEY', '6Les3lEgAAAAAIUzpi7Wknx9C-1IU2RB2rhkLco2'),
    'options' => [
        'timeout' => 30,
    ],
];
