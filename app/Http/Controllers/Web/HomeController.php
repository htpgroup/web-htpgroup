<?php

namespace App\Http\Controllers\Web;

use App\Helpers\TimeHelper;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use Modules\Article\Entities\Post;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $arrDomain = [
            [
                'name' => 'HTP Group',
                'url' => 'https://htpgroup.com.vn/',
                'active' => 1,
            ],
        ];
        //dd(setting('facebook_url'));

        $locale = App::currentLocale();

        if (App::isLocale('en')) {
            // $locale = 'en';
            $this->switch('vi');
            //return redirect()->route('language.switch', ['language' => 'vi']);
        }
        /*Redis::set('name', 'Taylor');
        Redis::get('name');
        $values = Redis::lrange('names', 5, 10);
        dd(Redis::get('name'));*/

        //Cookie
        $keyName = config('auth.key_cookie');
        $keyCookieGuess = $this->getCookie($request, $keyName);
        $value = Str::random(20);
        if ($keyCookieGuess == false) {
            $minutes = TimeHelper::SECONDS_IN_A_MONTH;
            Cookie::queue($keyName, $value, $minutes);
            //return response('Hello World')->cookie($keyName, $value, $minutes);
        }
        //Mục trải nghiệm sản phẩm
        $isShowInfoMobile = false;
        $isShowAppDownload = false;

        $listPosts = Post::query()
            ->with(['category', 'tags', 'comments'])
            ->limit(3)
            ->get();

        $data['arrDomain'] = $arrDomain;
        $data['listPosts'] = $listPosts;
        $data['isShowAppDownload'] = $isShowAppDownload;
        $data['isShowInfoMobile'] = $isShowInfoMobile;

        return view('home-htp.home.home', $data);
    }

    protected function switch($language)
    {
        app()->setLocale($language);

        session()->put('locale', $language);

        setlocale(LC_TIME, $language);

        Carbon::setLocale($language);
    }

    /*
    * Get cookie
    * */
    public function getCookie(Request $request, $key = 'name')
    {
        $value = $request->cookie($key);

        return $value;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
