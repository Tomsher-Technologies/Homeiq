<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Page;
use App\Models\PageTranslations;
use App\Models\PageSeos;
use App\Models\Brand;
use App\Models\HomeSlider;
use App\Models\Service;
use App\Models\BusinessSetting;
use App\Models\Subscriber;
use App\Models\Contacts;
use App\Models\Testimonials;
use App\Models\Blog;
use App\Mail\ContactEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\URL;
use App\Http\Resources\WebHomeProductsCollection;
use Storage;
use Validator;
use Mail;
use DB;
use Hash;
use Cache;

class FrontendController extends Controller
{

    public function loadSEO($model)
    {
        SEOTools::setTitle($model['title']);
        OpenGraph::setTitle($model['title']);
        TwitterCard::setTitle($model['title']);

        SEOMeta::setTitle($model['meta_title'] ?? $model['title']);
        SEOMeta::setDescription($model['meta_description']);
        SEOMeta::addKeyword($model['keywords']);

        OpenGraph::setTitle($model['og_title']);
        OpenGraph::setDescription($model['og_description']);
        OpenGraph::setUrl(URL::full());
        OpenGraph::addProperty('locale', 'en_US');
        
        JsonLd::setTitle($model['meta_title']);
        JsonLd::setDescription($model['meta_description']);
        JsonLd::setType('Page');

        TwitterCard::setTitle($model['twitter_title']);
        TwitterCard::setSite("@aldourigroup");
        TwitterCard::setDescription($model['twitter_description']);

        SEOTools::jsonLd()->addImage(URL::to(asset('assets/img/favicon.svg')));
    }

    public function loadDynamicSEO($model)
    {
        SEOTools::setTitle($model->title);
        OpenGraph::setTitle($model->title);
        TwitterCard::setTitle($model->title);

        SEOMeta::setTitle($model->seo_title ?? $model->title);
        SEOMeta::setDescription($model->seo_description);
        SEOMeta::addKeyword($model->keywords);

        OpenGraph::setTitle($model->og_title);
        OpenGraph::setDescription($model->og_description);
        OpenGraph::setUrl(URL::full());
        OpenGraph::addProperty('locale', 'en_US');
           
        JsonLd::setTitle($model->seo_title);
        JsonLd::setDescription($model->seo_description);
        JsonLd::setType('Page');

        TwitterCard::setTitle($model->twitter_title);
        TwitterCard::setSite("@aldourigroup");
        TwitterCard::setDescription($model->twitter_description);

        SEOTools::jsonLd()->addImage(URL::to(asset('assets/img/favicon.svg')));
    }

    public function home()
    {
        $page = Page::where('type','home')->first();
        $lang = getActiveLanguage();
        $seo = [
            'title'                 => $page->getTranslation('title', $lang),
            'meta_title'            => $page->getTranslation('meta_title', $lang),
            'meta_description'      => $page->getTranslation('meta_description', $lang),
            'keywords'              => $page->getTranslation('keywords', $lang),
            'og_title'              => $page->getTranslation('og_title', $lang),
            'og_description'        => $page->getTranslation('og_description', $lang),
            'twitter_title'         => $page->getTranslation('twitter_title', $lang),
            'twitter_description'   => $page->getTranslation('twitter_description', $lang),
        ];
        
        $this->loadSEO($seo);

        $data['slider'] = Cache::rememberForever('homeSlider', function () {
            $sliders = HomeSlider::where('status',1)->orderBy('sort_order','asc')->get();
            return $sliders;
        });

        $data['home_categories'] = Cache::rememberForever('home_categories', function () {
            $categories = get_setting('home_categories');
            if ($categories) {
                $details = Category::whereIn('id', json_decode($categories))->where('is_active', 1)
                    ->get();
                return $details;
            }
        });

        $data['home_products'] = Cache::remember('home_products', 3600, function () {
            $product_ids = get_setting('home_products');
            if ($product_ids) {
                $products =  Product::where('published', 1)->whereIn('id', json_decode($product_ids))->with('brand')->get();
                return $products;
            }
        });

        $data['home_services'] = Cache::remember('home_services', 3600, function () {
            $service_ids = get_setting('home_services');
            if ($service_ids) {
                $services =  Service::where('status', 1)->whereIn('id', json_decode($service_ids))->get();
                return $services;
            }
        });

        $data['testimonials'] = Cache::rememberForever('home_testimonials', function () {
            $testimonials = Testimonials::where('status', 1)->orderBy('sort_order', 'asc')->get();
            return $testimonials;
        });

        $data['blogs'] = Cache::rememberForever('home_blogs', function () {
            $details = Blog::where('status', 1)->orderBy('blog_date', 'desc')->limit(3)->get();
            return $details;
        });

        // return view('frontend.home',compact('page','data','lang'));

        return view('frontend.pages.home', [
            'products' => $data['home_products'],
            'services' => $data['home_services'],
            'categories' => $data['home_categories'],
            'testimonials' => $data['testimonials'],
            'blogs' => $data['blogs'], 
            'page' => $page,
            'lang' => $lang
        ]);
    }

    public function about()
    {
        $page = Page::where('type','about_us')->first();
        $lang = getActiveLanguage();
        $seo = [
            'title'                 => $page->getTranslation('title', $lang),
            'meta_title'            => $page->getTranslation('meta_title', $lang),
            'meta_description'      => $page->getTranslation('meta_description', $lang),
            'keywords'              => $page->getTranslation('keywords', $lang),
            'og_title'              => $page->getTranslation('og_title', $lang),
            'og_description'        => $page->getTranslation('og_description', $lang),
            'twitter_title'         => $page->getTranslation('twitter_title', $lang),
            'twitter_description'   => $page->getTranslation('twitter_description', $lang),
        ];
        
        $this->loadSEO($seo);
        return view('frontend.about',compact('page','lang'));
    }

    public function terms()
    {
        $page = Page::where('type','terms')->first();
        $lang = getActiveLanguage();
        $seo = [
            'title'                 => $page->getTranslation('title', $lang),
            'meta_title'            => $page->getTranslation('meta_title', $lang),
            'meta_description'      => $page->getTranslation('meta_description', $lang),
            'keywords'              => $page->getTranslation('keywords', $lang),
            'og_title'              => $page->getTranslation('og_title', $lang),
            'og_description'        => $page->getTranslation('og_description', $lang),
            'twitter_title'         => $page->getTranslation('twitter_title', $lang),
            'twitter_description'   => $page->getTranslation('twitter_description', $lang),
        ];
        
        $this->loadSEO($seo);
        return view('frontend.terms',compact('page','lang'));
    }

    public function privacy()
    {
        $page = Page::where('type','privacy_policy')->first();
        $lang = getActiveLanguage();
        $seo = [
            'title'                 => $page->getTranslation('title', $lang),
            'meta_title'            => $page->getTranslation('meta_title', $lang),
            'meta_description'      => $page->getTranslation('meta_description', $lang),
            'keywords'              => $page->getTranslation('keywords', $lang),
            'og_title'              => $page->getTranslation('og_title', $lang),
            'og_description'        => $page->getTranslation('og_description', $lang),
            'twitter_title'         => $page->getTranslation('twitter_title', $lang),
            'twitter_description'   => $page->getTranslation('twitter_description', $lang),
        ];
        
        $this->loadSEO($seo);
        return view('frontend.privacy_policy',compact('page','lang'));
    }


    public function contact()
    {
        $page = Page::where('type','contact_us')->first();
        $lang = getActiveLanguage();
        $seo = [
            'title'                 => $page->getTranslation('title', $lang),
            'meta_title'            => $page->getTranslation('meta_title', $lang),
            'meta_description'      => $page->getTranslation('meta_description', $lang),
            'keywords'              => $page->getTranslation('keywords', $lang),
            'og_title'              => $page->getTranslation('og_title', $lang),
            'og_description'        => $page->getTranslation('og_description', $lang),
            'twitter_title'         => $page->getTranslation('twitter_title', $lang),
            'twitter_description'   => $page->getTranslation('twitter_description', $lang),
        ];
        
        $this->loadSEO($seo);
        return view('frontend.contact_us', compact('page','lang'));
    }

    public function submitContactForm(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string',
            'message' => 'required|string|max:5000',
        ]);

        $con                = new Contacts;
        $con->name          = $request->firstName.' '.$request->lastName;
        $con->email         = $request->email;
        $con->phone         = $request->phone;
        $con->subject       = $request->subject;
        $con->message       = $request->message;
        $con->save();
        
        // Send an email (optional)
        Mail::to(env('MAIL_ADMIN'))->queue(new ContactEnquiry($con));

        session()->flash('message', trans('messages.contact_success_msg'));
        session()->flash('alert-type', 'success');

        return redirect()->back();
    }

    public function changeLanguage(Request $request)
    {
       
        Session::put('locale', $request->locale);
        App::setLocale($request->locale);
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ],[
            'email.required' => trans('messages.enter_email'),
            'email.email' => trans('messages.enter_valid_email'),
            'email.unique' => trans('messages.email_already_subscribed'),
        ]);

        Subscriber::create(['email' => $request->email]);

        return response()->json(['success' => trans('messages.newsletter_success')]);
    }

}
