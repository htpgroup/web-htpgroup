<?php

use App\Models\Crm\CompanySetting;
use App\Models\Crm\Currency;
use App\Models\Crm\CustomField;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;

if (! function_exists('mix_cdn')) {
    /**
     * Get the path to a versioned Mix file.
     *
     * @param  string  $path
     * @param  string  $manifestDirectory
     * @return \Illuminate\Support\HtmlString
     *
     * @throws \Exception
     */
    function mix_cdn($path, $manifestDirectory = '')
    {
        if (! config('asset-cdn.use_cdn')) {
            return mix($path, $manifestDirectory);
        }

        static $manifests = [];

        if (! Str::startsWith($path, '/')) {
            $path = "/{$path}";
        }

        if ($manifestDirectory && ! Str::startsWith($manifestDirectory, '/')) {
            $manifestDirectory = "/{$manifestDirectory}";
        }

        $manifestPath = public_path($manifestDirectory.'/mix-manifest.json');

        if (! isset($manifests[$manifestPath])) {
            if (! file_exists($manifestPath)) {
                throw new Exception('The Mix manifest does not exist.');
            }

            $manifests[$manifestPath] = json_decode(file_get_contents($manifestPath), true);
        }

        $manifest = $manifests[$manifestPath];

        if (! isset($manifest[$path])) {
            throw new Exception("Unable to locate Mix file: {$path}.");
        }

        $cdnUrl = config('asset-cdn.cdn_url');
        // Remove slashes from ending of the path
        $cdnUrl = rtrim($cdnUrl, '/');

        return new HtmlString($cdnUrl.$manifestDirectory.$manifest[$path]);
    }
}

if (! function_exists('asset_cdn')) {

    /**
     * Generate an asset path for the application.
     *
     * @param  string  $path
     * @return string
     */
    function asset_cdn($path, $type = 1, $show_version = 1)
    {
        $version = '20220527';
        if ($show_version) {
            $path .= '?version='.$version;
        }

        $hasConfigCdn = config('asset-cdn.use_cdn');
        if ($hasConfigCdn == false) {
            if ($type != 2) {
                return asset($path);
            }
        }
        //Local assets
        // if ($type == 1) {return asset($path);}

        $cdnUrl = config('asset-cdn.cdn_url');
        // Remove slashes from ending of the path
        $cdnUrl = rtrim($cdnUrl, '/');

        return $cdnUrl.'/'.trim($path, '/');
    }
}

/**
 * Set Active Path
 *
 * @param $path
 * @param  string  $active
 * @return string
 */
function set_active($path, $active = 'active')
{
    return call_user_func_array('Request::is', (array) $path) ? $active : '';
}

/**
 * @param $path
 * @return mixed
 */
function is_url($path)
{
    return call_user_func_array('Request::is', (array) $path);
}

/**
 * Get company setting
 *
 * @param $company_id
 * @return string
 */
function get_company_setting($key, $company_id)
{
    if (\Storage::disk('local')->has('database_created')) {
        return CompanySetting::getSetting($key, $company_id);
    }

    return null;
}

/**
 * Get app setting
 *
 * @param $company_id
 * @return string
 */
function get_app_setting($key)
{
    if (\Storage::disk('local')->has('database_created')) {
        return \App\Models\Crm\Setting::getSetting($key);
    }

    return null;
}

/*
 * Get or Set the Settings Values
 *
 * @var [type]
 */
if (! function_exists('crm_setting')) {
    function setting($key, $default = null)
    {
        if (is_null($key)) {
            return new App\Models\Crm\Setting();
        }

        if (is_array($key)) {
            return App\Models\Crm\Setting::setSetting($key[0], $key[1]);
        }

        $value = App\Models\Crm\Setting::getSetting($key);

        return is_null($value) ? value($default) : $value;
    }
}

/**
 * @param  string  $type
 * @return string
 */
function getCustomFieldValueKey(string $type)
{
    switch ($type) {
        case 'Input':
            return 'string_answer';

        case 'TextArea':
            return 'string_answer';

        case 'Phone':
            return 'number_answer';

        case 'Url':
            return 'string_answer';

        case 'Number':
            return 'number_answer';

        case 'Dropdown':
            return 'string_answer';

        case 'Switch':
            return 'boolean_answer';

        case 'Date':
            return 'date_answer';

        case 'Time':
            return 'time_answer';

        case 'DateTime':
            return 'date_time_answer';

        default:
            return 'string_answer';
    }
}

/**
 * @param $money
 * @return formated_money
 */
/*
 * Format money VND
 * */
function format_money_pdf($money, $currency = null, $type = 1)
{
    //$money = $money / 100;
    $money = $money;

    /* if (!$currency) {
         //$currency = Currency::findOrFail(CompanySetting::getSetting('currency', 1));
         $currency = Currency::findOrFail(17);
     }*/
    //VND Currency
    $currency = Currency::findOrFail(17);

    $format_money = number_format(
        $money,
    // $currency->precision,
    //$currency->decimal_separator,
    //$currency->thousand_separator
    );

    $currency_with_symbol = '';
    $isSwrapSymbol = $currency->swap_currency_symbol;
    if ($isSwrapSymbol) {
        $currency_with_symbol = $format_money.' '.$currency->code;
    } else {
        $currency_with_symbol = $format_money.' '.$currency->symbol;
    }

    return $currency_with_symbol;
}

function format_money_pdf2($money, $currency = null)
{
    $money = $money / 100;

    if (! $currency) {
        $currency = Currency::findOrFail(CompanySetting::getSetting('currency', 1));
    }

    $format_money = number_format(
        $money,
        $currency->precision,
        $currency->decimal_separator,
        $currency->thousand_separator
    );

    $currency_with_symbol = '';
    if ($currency->swap_currency_symbol) {
        $currency_with_symbol = $format_money.'<span style="font-family: DejaVu Sans;">'.$currency->symbol.'</span>';
    } else {
        $currency_with_symbol = '<span style="font-family: DejaVu Sans;">'.$currency->symbol.'</span>'.$format_money;
    }

    return $currency_with_symbol;
}

function slug_text($text)
{
    return Str::slug($text);
}

/**
 * @param $string
 * @return string
 */
function clean_slug($model, $title, $id = 0)
{
    // Normalize the title
    $slug = Str::upper('CUSTOM_'.$model.'_'.Str::slug($title, '_'));

    // Get any that could possibly be related.
    // This cuts the queries down by doing it once.
    $allSlugs = getRelatedSlugs($model, $slug, $id);

    // If we haven't used it before then we are all good.
    if (! $allSlugs->contains('slug', $slug)) {
        return $slug;
    }

    // Just append numbers like a savage until we find not used.
    for ($i = 1; $i <= 10; $i++) {
        $newSlug = $slug.'_'.$i;
        if (! $allSlugs->contains('slug', $newSlug)) {
            return $newSlug;
        }
    }

    throw new \Exception('Can not create a unique slug');
}

function getRelatedSlugs($type, $slug, $id = 0)
{
    return CustomField::select('slug')->where('slug', 'like', $slug.'%')
        ->where('model_type', $type)
        ->where('id', '<>', $id)
        ->get();
}

if (! function_exists('md_to_html')) {
    /**
     * Convert Markdown to HTML.
     */
    function md_to_html(string $markdown): string
    {
        //Config tag
        return app(App\Markdown\Converter::class)->toHtml($markdown);
    }
}

/**
 * @param $money
 * @return formated_money
 */
function format_money_pdf1($money, $currency = null)
{
    $money = $money / 100;

    if (! $currency) {
        $currency = Currency::findOrFail(CompanySetting::getSetting('currency', 1));
    }

    $format_money = number_format(
        $money,
        $currency->precision,
        $currency->decimal_separator,
        $currency->thousand_separator
    );

    $currency_with_symbol = '';
    if ($currency->swap_currency_symbol) {
        $currency_with_symbol = $format_money.'<span style="font-family: DejaVu Sans;">'.$currency->code.'</span>';
    } else {
        $currency_with_symbol = '<span style="font-family: DejaVu Sans;">'.$currency->symbol.'</span>'.$format_money;
    }

    return $currency_with_symbol;
}

function format_money($money, $currency = null)
{
    $money = $money / 100;

    if (! $currency) {
        //$currency = Currency::findOrFail(CompanySetting::getSetting('currency', 1));
        $currency = Currency::findOrFail(CompanySetting::getSetting('currency', 1));
    }

    $format_money = number_format(
        $money,
        $currency->precision,
        $currency->decimal_separator,
        $currency->thousand_separator
    );

    $currency_with_symbol = '';
    if ($currency->swap_currency_symbol) {
        $currency_with_symbol = $format_money.' '.$currency->code;
    } else {
        $currency_with_symbol = $currency->symbol.' '.$format_money;
    }

    return $currency_with_symbol;
}

/*
 * Format money VND
 * */
function format_money_vnd($money, $currency = null, $type = 1)
{
    //$money = $money / 100;
    $money = $money;

    if (! $currency) {
        //$currency = Currency::findOrFail(CompanySetting::getSetting('currency', 1));
        //$currency = Currency::findOrFail(17);
    }

    if ($money == '' || empty($money)) {
        return $money;
    }

    //dd($currency);
    $currencyCode = 'VND';
    $currencySymbol = '₫';
    $format_money = number_format(
        $money,
    // $currency->precision,
    //$currency->decimal_separator,
    //$currency->thousand_separator
    );

    $currency_with_symbol = '';
    //$isSwrapSymbol = $currency->swap_currency_symbol;
    $isSwrapSymbol = 0;
    if ($isSwrapSymbol) {
        $currency_with_symbol = $format_money.' '.$currencyCode;
    } else {
        $currency_with_symbol = $format_money.' '.$currencySymbol;
    }

    return $currency_with_symbol;
}

/*
 * Get short name
 * @created 2021/11/02
 * */
function get_short_showname($name)
{
    if (empty($name)) {
        $name = 'Xin Chào';
    }
    $listWord = explode(' ', $name);
    $count = 0;
    $charText = '';
    $listWord = array_slice($listWord, -2);

    foreach ($listWord as $word) {
        if ($count == 2) {
            continue;
        }
        $word = Str::ascii($word);

        $charText .= substr($word, 0, 1);
        $count++;
    }

    $charText = Str::upper(Str::ascii($charText));

    return Str::ascii($charText);
}

/*
 * Limit word
 * */
function str_limit_text($str, $limit = 10)
{
    $truncated = Str::of($str)->limit($limit);

    return $truncated;
}

function convertDataImage($image)
{
    return base64_decode(str_replace('data:image/png;base64,', '', $image));
}

/**
 * Upload image to cloudinary
 *
 * @param $dataBase64
 * @param $oldFile
 * @param  string  $folder
 */
function uploadImageBase64($dataBase64, $folder = 'blog')
{
    $filename = $folder.'/'.date('Ymd').'/'.uniqid().'_'.rand(0, 999).'.jpg';
    //$upload = Storage::disk('s3')->put($filename, convertDataImage($dataBase64), 'public');
    $file = ($dataBase64);
    //q_auto:best
    $uploadedFileUrl = Cloudinary::upload($file)->getSecurePath();

    if ($uploadedFileUrl) {
        return $uploadedFileUrl;
    }

    return false;
}

/*
    * Send Firebase
    * */
function sendFirebaseData($path, $data)
{
    //Send Firebase

    $dbUri = config('firebase.projects.app.database.url');
    $factory = (new Factory())->withDatabaseUri($dbUri);
    $database = $factory->createDatabase();

    $a = $database->getReference($path)
        //     ->remove();
        //->getValue();
        ->set($data);

    return true;
}

/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('convertDmyToYmd')) {
    function convertDmyToYmd($date)
    {
        return Carbon::createFromFormat('d-m-Y', $date)->format('Y-m-d');
    }
}

/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('convertYdmToMdy')) {
    function convertYdmToMdy($date)
    {
        return Carbon::createFromFormat('Y-d-m', $date)->format('m-d-Y');
    }
}

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Kreait\Firebase\Factory;
use Telegram\Bot\Laravel\Facades\Telegram;

if (! function_exists('setting')) {
    /**
     * Get a setting, or the default value.
     *
     * @param  string  $name
     * @param  mixed  $default
     * @return mixed
     */
    function setting($name, $default = null)
    {
        static $settings = [];

        if (isset($settings[$name])) {
            return $settings[$name];
        }

        return $settings[$name] = '12';
    }
}

if (! function_exists('set_active')) {
    /**
     * Set active class if request is in path.
     *
     * @param  string  $path
     * @param  array  $classes
     * @param  string  $active
     * @return string
     */
    function set_active($path, array $classes = [], $active = 'active')
    {
        if (Request::is($path)) {
            $classes[] = $active;
        }

        $class = e(implode(' ', $classes));

        return empty($classes) ? '' : "class=\"{$class}\"";
    }
}

if (! function_exists('color_darken')) {
    /**
     * Darken a color.
     *
     * @param  string  $hex
     * @param  int  $percent
     * @return string
     */
    function color_darken($hex, $percent)
    {
        $hex = preg_replace('/[^0-9a-f]/i', '', $hex);
        $new_hex = '#';

        if (strlen($hex) < 6) {
            $hex = $hex[0] + $hex[0] + $hex[1] + $hex[1] + $hex[2] + $hex[2];
        }

        for ($i = 0; $i < 3; $i++) {
            $dec = hexdec(substr($hex, $i * 2, 2));
            $dec = min(max(0, $dec + $dec * $percent), 255);
            $new_hex .= str_pad(dechex($dec), 2, 0, STR_PAD_LEFT);
        }

        return $new_hex;
    }
}

if (! function_exists('color_contrast')) {
    /**
     * Calculates colour contrast.
     *
     * https://24ways.org/2010/calculating-color-contrast/
     *
     * @param  string  $hexcolor
     * @return string
     */
    function color_contrast($hexcolor)
    {
        $r = ctype_xdigit(substr($hexcolor, 0, 2));
        $g = ctype_xdigit(substr($hexcolor, 2, 2));
        $b = ctype_xdigit(substr($hexcolor, 4, 2));
        $yiq = (($r * 100) + ($g * 400) + ($b * 114)) / 1000;

        return ($yiq >= 128) ? 'black' : 'white';
    }
}

if (! function_exists('cachet_route_generator')) {
    /**
     * Generate the route string.
     *
     * @param  string  $name
     * @param  string  $method
     * @param  string  $domain
     * @return string
     */
    function cachet_route_generator($name, $method = 'get', $domain = 'core')
    {
        return "{$domain}::{$method}:{$name}";
    }
}

if (! function_exists('cachet_route')) {
    /**
     * Generate a URL to a named route, which resides in a given domain.
     *
     * @param  string  $name
     * @param  array  $parameters
     * @param  string  $method
     * @param  string  $domain
     * @return string
     */
    function cachet_route($name, $parameters = [], $method = 'get', $domain = 'core')
    {
        return app('url')->route(
            cachet_route_generator($name, $method, $domain),
            $parameters,
            true
        );
    }
}

if (! function_exists('cachet_redirect')) {
    /**
     * Create a new redirect response to a named route, which resides in a given domain.
     *
     * @param  string  $name
     * @param  array  $parameters
     * @param  int  $status
     * @param  array  $headers
     * @param  string  $method
     * @param  string  $domain
     * @return \Illuminate\Http\RedirectResponse
     */
    function cachet_redirect($name, $parameters = [], $status = 302, $headers = [], $method = 'get', $domain = 'core')
    {
        $url = cachet_route($name, $parameters, $method, $domain);

        return app('redirect')->to($url, $status, $headers);
    }
}

if (! function_exists('execute')) {
    /**
     * Send the given command to the dispatcher for execution.
     *
     * @param  object  $command
     * @return void
     */
    function execute($command)
    {
        return app(Dispatcher::class)->dispatchNow($command);
    }
}

/*
 *
 * label_case
 *
 * ------------------------------------------------------------------------
 */
if (! function_exists('label_case')) {

    /**
     * Prepare the Column Name for Lables.
     */
    function label_case($text)
    {
        $order = ['_', '-'];
        $replace = ' ';

        $new_text = trim(\Illuminate\Support\Str::title(str_replace('"', '', $text)));
        $new_text = trim(\Illuminate\Support\Str::title(str_replace($order, $replace, $text)));
        $new_text = preg_replace('!\s+!', ' ', $new_text);

        return $new_text;
    }
}

/*
 *
 * logUserAccess
 * Get current user's `name` and `id` and
 * log as debug data. Additional text can be added too.
 *
 * ------------------------------------------------------------------------
 */
if (! function_exists('logUserAccess')) {

    /**
     * Format a string to Slug.
     */
    function logUserAccess($text = '')
    {
        $auth_text = '';

        if (\Auth::check()) {
            $auth_text = 'User:'.\Auth::user()->name.' (ID:'.\Auth::user()->id.')';
        }

        \Log::debug(label_case($text)." | $auth_text");
    }
}

if (! function_exists('sendTelegramMessage')) {

    /**
     * Send telemetry message to Member.
     */
    function sendTelegramMessage($text = '', $chat_id = null)
    {
        if (is_null($chat_id)) {
            $chat_id = \App::make('Telegram');
        }

        Telegram::sendMessage([
            'chat_id' => '706659637',
            'parse_mode' => 'HTML',
            'text' => $text,
        ]);

        \Log::debug("Send telegram message: $text");
    }
}

/*
 * Show Human readable file size
 *
 * @var [type]
 */
if (! function_exists('humanFilesize')) {
    function humanFilesize($size, $precision = 2)
    {
        $units = ['B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
        $step = 1024;
        $i = 0;

        while (($size / $step) > 0.9) {
            $size = $size / $step;
            $i++;
        }

        return round($size, $precision).$units[$i];
    }
}
