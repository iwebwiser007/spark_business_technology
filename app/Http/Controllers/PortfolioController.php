<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio(){
        $portfolios = Portfolio::where('status', '1')->get();
        return view('portfolio' , compact('portfolios'));
    }

    public function detail($slug){

        $portfolio = Portfolio::where('slug', $slug)->first();
        return view('front.portfolio.detail' , compact('portfolio'));
    }
}
