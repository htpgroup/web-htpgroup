<?php

namespace App\Http\Controllers\Web;

use App\Dictionaries\MenuData;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Modules\Article\Entities\Post;

class BlogController extends Controller
{
    public function __construct()
    {
        //its just a dummy data object.

        // Sharing is caring
        View::share('view_menu_id', MenuData::BLOG);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $select_options = [
            'Article' => 'Article',
            'Feature' => 'Feature',
            'News' => 'News',
            'Recruitment' => 'Recruitment',
        ];

        $listPosts = Post::latest()
            ->with(['category', 'tags', 'comments'])
            ->where('type', '=', 'News')
            ->paginate();

        $data = [
            'listPosts' => $listPosts,
        ];

        return view('home-htp.blog.index', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recruitmentIndex(Request $request)
    {
        //
        $select_options = [
            'Article' => 'Article',
            'Feature' => 'Feature',
            'News' => 'News',
            'Recruitment' => 'Recruitment',
        ];

        $listPosts = Post::latest()
            ->with(['category', 'tags', 'comments'])
            ->where('type', '=', 'Recruitment')
            ->paginate();

        $data = [
            'listPosts' => $listPosts,
        ];

        return view('home-htp.recruitment.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function recruitmentShow(Request $request, $slug = false, $id=1)
    {
        //
        $post = Post::where('id', $id)->first();

        $data = [
            'post' => $post,
        ];

        //dd($post->attributesToArray());

        return view('home-htp.recruitment.show', $data);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug = false)
    {
        //
        $post = Post::where('slug', $slug)->first();

        $data = [
            'post' => $post,
        ];

        return view('home-htp.blog.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
