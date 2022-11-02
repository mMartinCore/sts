<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }


  public function sitemap()
    {
        return view('/sitemap');
    }


    public function rates()
    {
        

        // return Cache::remember('city' . $city, 60 * 5, function() use ($coordinates) {
            $rates = Http::get('http://vorkkloc.localhost/api/rates');
            
          
        //     if ($rates->successful()) {
        //         return rates;
        //     }

        //     return rates=[];
        // });

        // $rates=$rates=$rates->json()   ;
        $rates=$rates=json_decode($rates)   ;
        
        $links =$rates->meta->links;

        //  dd($rates->meta->links);   ;
        return view('pages.rates.rates',  compact('rates','links'));
    }


    public function about()
    {
        return view('pages.abouts.about');
    }

    public function contact()
    {
        return view('pages.contacts.contact');
    }

    public function privacy()
    {
        return view('pages.privacy.privacy');
    }


    public function term_condition()
    {
        return view('pages.term_condition.term_condition');
    }


}
