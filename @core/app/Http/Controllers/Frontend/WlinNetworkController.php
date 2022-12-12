<?php

namespace App\Http\Controllers\Frontend;

use App\BlogCategory;
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
        return view("frontend.v2.blog.network-blogs", compact('network'));
    }
}