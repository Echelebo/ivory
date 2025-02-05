<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use App\Models\EmailTemplate;
use Illuminate\Http\Request;
use App\Models\WorkProcess;
use App\Models\Testimonial;
use App\Models\Subscriber;
use App\Mail\Subscription;
use App\Models\Portfolio;
use App\Models\Article;
use App\Models\Service;
use App\Models\Counter;
use App\Models\Setting;
use App\Models\Member;
use App\Models\Slider;
use App\Models\Client;
use App\Models\About;
use App\Models\Page;
use App\Models\ArticleCategory;
use Mail;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Sliders
        $data['sliders'] = Slider::where('status', '1')
                            ->orderBy('id', 'desc')
                            ->get();

        // About
        $data['about'] = About::where('status', '1')
                            ->first();

        // Counters
        $data['counters'] = Counter::where('status', '1')
                            ->orderBy('id', 'asc')
                            ->get();

        // Services
        $data['services'] = Service::where('status', '1')
                            ->orderBy('id', 'asc')
                            ->get();

        // Portfolio Categories
        $data['portfolio_categories'] = PortfolioCategory::where('status', '1')
                            ->orderBy('id', 'asc')
                            ->get();

        // Portfolios
        $data['portfolios'] = Portfolio::where('status', '1')
                            ->orderBy('id', 'desc')
                            ->take(9)
                            ->get();

        // Members
        $data['members'] = Member::where('status', '1')
                            ->orderBy('id', 'asc')
                            ->get();

        // Testimonials
        $data['testimonials'] = Testimonial::where('status', '1')
                            ->orderBy('id', 'desc')
                            ->get();

        // Articles
        $data['articles'] = Article::where('status', '1')
                            ->orderBy('id', 'desc')
                            ->take(3)
                            ->get();

        // Processes
        $data['processes'] = WorkProcess::where('status', '1')
                            ->orderBy('id', 'asc')
                            ->get();

        // Clients
        $data['clients'] = Client::where('status', '1')
                            ->orderBy('id', 'desc')
                            ->get();

        return view('web.index', $data);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function subscribe(Request $request)
    {
        // Field Validation
        $request->validate([
            'email' => 'required|email',
        ]);

        $subscriber = Subscriber::where('email', $request->email)->first();

        if(!isset($subscriber)){
            Subscriber::create($request->all());
        }

        // Notify to User
        $template = EmailTemplate::where('slug', 'subscription')->first();
        $setting = Setting::where('status', '1')->first();

        if(isset($template) && isset($setting)){

            // Passing data to email template
            $data['email'] = $request->email;

            // Mail Information
            $data['subject'] = $template->title;
            $data['from'] = $setting->contact_mail;
            $data['sender'] = $setting->title;
            $data['message'] = $template->description;

            // Send Mail
            Mail::to($data['email'])->send(new Subscription($data));

        }

        return redirect()->back();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function page($slug)
    {
        // Page
        $data['page'] = Page::where('status', 1)->firstOrFail();

        return view('web.page-single', $data);
    }

    public function bece()
    {
        // Page
        $data['page'] = Page::where('status', 1)->firstOrFail();

        return view('web.bece', $data);
    }

    public function career()
    {
        // Page
        $data['page'] = Page::where('status', 1)->firstOrFail();

        return view('web.career', $data);
    }

    public function commonentrance()
    {
        // Page
        $data['page'] = Page::where('status', 1)->firstOrFail();

        return view('web.common-entrance', $data);
    }

    public function icttraining()
    {
        // Page
        $data['page'] = Page::where('status', 1)->firstOrFail();

        return view('web.icttraining', $data);
    }

    public function jamb()
    {
        // Page
        $data['page'] = Page::where('status', 1)->firstOrFail();

        return view('web.jamb', $data);
    }

    public function leadership()
    {
        // Page
        $data['page'] = Page::where('status', 1)->firstOrFail();

        return view('web.leadership', $data);
    }

    public function privacy()
    {
        // Page
        $data['page'] = Page::where('status', 1)->firstOrFail();

        return view('web.privacy', $data);
    }

    public function sat()
    {
        // Page
        $data['page'] = Page::where('status', 1)->firstOrFail();

        return view('web.sat', $data);
    }

    public function ss1foundation()
    {
        // Page
        $data['page'] = Page::where('status', 1)->firstOrFail();

        return view('web.ss1-foundation', $data);
    }

    public function ssce()
    {
        // Page
        $data['page'] = Page::where('status', 1)->firstOrFail();

        return view('web.ssce', $data);
    }

    public function term()
    {
        // Page
        $data['page'] = Page::where('status', 1)->firstOrFail();

        return view('web.term', $data);
    }

    public function virtual()
    {
        // Page
        $data['page'] = Page::where('status', 1)->firstOrFail();

        return view('web.virtual', $data);
    }

    public function volunteerism()
    {
        // Page
        $data['page'] = Page::where('status', 1)->firstOrFail();

        return view('web.volunteerism', $data);
    }

    public function blog()
    {

         // Articles
         $data['articles'] = Article::where('status', '1')
         ->orderBy('id', 'desc')
         ->paginate(5);

// Article Category
$data['article_categories'] = ArticleCategory::where('status', '1')
         ->orderBy('id', 'asc')
         ->get();
        // Page
        $data['page'] = Page::where('status', 1)->firstOrFail();

        return view('web.blog', $data);
    }

    public function searchblog(Request $request)
    {
        $data['search'] = $search = strip_tags($request->search);

        // Articles
        $data['articles'] = Article::where(function($query) use ($search){
                                $query->where('title', 'LIKE', '%'.$search.'%' );
                                $query->orWhere('description', 'LIKE', '%'.$search.'%' );
                            })
                            ->where('status', '1')
                            ->orderBy('id', 'desc')
                            ->paginate(5);

        // Article Category
        $data['article_categories'] = ArticleCategory::where('status', '1')
                            ->orderBy('id', 'asc')
                            ->get();

        return view('web.article-category', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showblog($slug)
    {
        // Article
        $data['article'] = Article::where('slug', $slug)
                            ->where('status', '1')
                            ->firstOrFail();

        // Article Category
        $data['article_categories'] = ArticleCategory::where('status', '1')
                            ->orderBy('id', 'asc')
                            ->get();

        return view('web.blog-single', $data);
    }


}
