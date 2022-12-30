<?php

namespace App\Http\Controllers\Frontend;

use App\Blog;
use App\BlogCategory;
use App\HeaderSlider;
use App\Http\Controllers\Controller;

class WlinNetworkController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::query()
            ->where(['type' => 'network', 'lang' => get_user_lang(), 'parent' => 0])
            ->get();
        return view("frontend.v2.blog.category-network", compact('categories'));
    }

    public function category($slug)
    {
        $network = BlogCategory::query()
            ->with(['blogs'])
            ->where(['slug' => $slug, 'status' => 'publish', 'lang' => get_user_lang()])
            ->firstOrFail();
        $networkBlog = Blog::query()
            ->whereJsonContains('blog_categories_id', "$network->id")
            ->orWhere(['blog_categories_id' => $network->id])
            ->paginate(16);
        $members = Blog::query()->where('type', '=', 'member')
            ->limit(24)
            ->orderBy('id', 'DESC')
            ->get();
        $blogs = Blog::query()
            ->where(['status' => 'publish',
                'breaking_news' => 1,
                'lang' => get_user_lang()])
            ->limit(5)->get();
        return view("frontend.v2.blog.network-blogs", compact('networkBlog', 'blogs', 'members', 'network'));
    }

    public function members($slug)
    {
        $network = BlogCategory::query()
            ->with(['blogs'])
            ->where(['slug' => $slug, 'status' => 'publish', 'lang' => get_user_lang()])
            ->firstOrFail();
        $members = Blog::query()->where('type', '=', 'member')
            ->limit(24)
            ->orderBy('id', 'DESC')
            ->get();
        $blogs = Blog::query()
            ->where(['status' => 'publish',
                'breaking_news' => 1,
                'lang' => get_user_lang()])
            ->limit(5)->get();
        return view("frontend.v2.blog.network-blogs", compact('blogs', 'members', 'network'));
    }

    public function partners($slug)
    {
        $network = BlogCategory::query()
            ->with(['blogs'])
            ->where(['slug' => $slug, 'status' => 'publish', 'lang' => get_user_lang()])
            ->firstOrFail();
        $members = Blog::query()->where('type', '=', 'partners')
            ->limit(24)
            ->orderBy('id', 'DESC')
            ->get();
        $blogs = Blog::query()
            ->where(['status' => 'publish',
                'breaking_news' => 1,
                'lang' => get_user_lang()])
            ->limit(5)->get();
        return view("frontend.v2.blog.network-blogs", compact('blogs', 'members', 'network'));
    }

    public function world()
    {
        $categories = BlogCategory::query()
            ->where(['type' => 'blog', 'status' => 'publish', 'lang' => userLang()])
            ->with(['blogs'])
            ->get();
        $sliders = HeaderSlider::where('lang', userLang())->get();
        return view('frontend.v2.blog.world-category', compact('categories', 'sliders'));
    }
}
