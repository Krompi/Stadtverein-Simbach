<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Repositories\PageRepository;
use A17\Twill\Facades\TwillAppSettings;

class PageDisplayController extends Controller
{
    public function home(): View
    {
        if (TwillAppSettings::get('homepage.homepage.page')->isNotEmpty()) {
            /** @var \App\Models\Page $frontPage */
            $frontPage = TwillAppSettings::get('homepage.homepage.page')->first();
 
            if ($frontPage->published) {
                return view('site.home', ['item' => $frontPage]);
            }
        }
 
        abort(404);
    }
    
    public function show(string $slug, PageRepository $pageRepository): View
    {
        $page = $pageRepository->forSlug($slug);
 
        if (!$page) {
            abort(404);
        }
 
        return view('site.page', ['item' => $page]);
    }
}
