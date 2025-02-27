<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use App\Models\ArticleCategory;
use App\Models\LiveChat;
use App\Models\Setting;
use App\Models\Section;
use App\Models\Article;
use App\Models\Service;
use App\Models\Social;
use App\Models\Page;
use App\Models\WorkProcess;
use App\Models\Faq;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();


        // Share view for Common Data
        $setting = Setting::where('status', '1')->first();
        $social = Social::where('status', '1')->first();
        $livechat = LiveChat::first();
        $sections = Section::where('status', '1')->get();
        $pages = Page::where('status', '1')->get();
        $faqs = Faq::where('status', '1')->get();
        $article_subnavs = ArticleCategory::where('status', '1')->get();
        $workprogress = WorkProcess::where('status', '1')->get();
        $service_subnavs = Service::where('status', '1' )->get();
        $first_programs = Service::where('status', '=', 1 AND 'id', '<', 6 )->orderBy('id', 'desc')->get();
        $second_programs = Service::where('status', '=', 1 AND 'id', '>', 5 AND 'id', '<', 11)->orderBy('id', 'desc')->get();
        $recents = Article::where('status', '1')
                            ->orderBy('id', 'desc')
                            ->take(3)
                            ->get();

        View::share(['setting' => $setting, 'social' => $social, 'faqs' => $faqs, 'workprogress' => $workprogress, 'first_programs' => $first_programs, 'second_programs' => $second_programs, 'livechat' => $livechat, 'pages' => $pages, 'recents' => $recents, 'sections' => $sections, 'article_subnavs' => $article_subnavs, 'service_subnavs' => $service_subnavs]);

    }
}
