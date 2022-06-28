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
    public function index(Request $request)
    {
        //
        $input = $request->all();
        $getCategory = $request->get('category_id');
        $select_options = [
            'Article' => 'Article',
            'Feature' => 'Feature',
            'News' => 'News',
            'Recruitment' => 'Recruitment',
        ];

        //Bài viết Tin tức
        $listPosts = Post::latest()
            ->filter($request->only(['category_id']))
            ->with(['category', 'tags', 'comments'])
            ->where('type', '=', 'News')
            ->paginate();

        //Danh sách danh mục bài viết

        $listCategoryInpost = Post::query()
            ->where('type', '=', 'News')
            ->pluck('category_id')->unique()->toArray();
        $arrayCategory = [];
        foreach ($listCategoryInpost as $key => $value) {
            $arrayCategory[] = $value;
        }

        $listCategory = \Modules\Article\Entities\Category::whereIn('id', $arrayCategory)->get();

        $data = [
            'listPosts' => $listPosts,
            'listCategory' => $listCategory,
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
            ->filter($request->only(['category_id']))
            ->with(['category', 'tags', 'comments'])
            ->where('type', '=', 'Recruitment')
            ->paginate();

        $listCategoryInpost = Post::query()
            ->where('type', '=', 'Recruitment')
            ->pluck('category_id')->unique()->toArray();
        $arrayCategory = [];
        foreach ($listCategoryInpost as $key => $value) {
            $arrayCategory[] = $value;
        }

        $listCategory = \Modules\Article\Entities\Category::whereIn('id', $arrayCategory)->get();

        $data = [
            'listPosts' => $listPosts,
            'listCategory' => $listCategory,
        ];

        return view('home-htp.recruitment.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function recruitmentShow(Request $request, $slug = false, $id = 1)
    {
        //
        $post = Post::where('id', $id)->first();
        $meta_page_type = 'article';

        $data = [
            'post' => $post,
            'meta_page_type' => $meta_page_type,
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
    public function show($slug = false)
    {
        //
        $post = Post::where('slug', $slug)->first();
        $meta_page_type = 'article';
        $data = [
            'post' => $post,
            'meta_page_type' => $meta_page_type,
        ];

        return view('home-htp.blog.show', $data);
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
