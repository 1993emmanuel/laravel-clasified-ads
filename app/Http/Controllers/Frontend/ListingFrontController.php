<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

use App\Models\Category;

class ListingFrontController extends Controller
{
    //

    public function index(){

        $listings = QueryBuilder::for(Listing::class)
            ->allowedFilters(
                [
                    'title',
                    AllowedFilter::exact('country_id'),
                    AllowedFilter::exact('category_id'),
                    AllowedFilter::scope('max_price'),
                ]
            )
            ->get();
        return view('frontend.all-listings',compact('listings'));
    }

    public function welcome(){
        $categories = Category::inRandomOrder()->limit(6)->get();
        $featured_ads = Listing::where('is_published',true)->get();
        $categoriesFooter = Category::inRandomOrder()->limit(5)->get();
        $featured_adsFooter = Listing::where('is_published',true)->inRandomOrder(4)->get();
        return view('welcome',compact('categories','featured_ads','categoriesFooter','featured_adsFooter'));
    }


}
