<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SystemController extends Controller
{
    public function switchLang(Request $request)
    {
        session()->put('lang', $request->post('lang', 'vi'));
        Cache::put('lang', $request->post('lang'));
        return ['success' => true];
    }
}
