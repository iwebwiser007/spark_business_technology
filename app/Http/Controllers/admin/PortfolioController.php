<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class PortfolioController extends Controller
{
    public function index(Request $request){
        $perPage = $request->get('perPage', 10);
        $countries = Country::all();
        $search = $request->get('search', '');
        $portfolios = Portfolio::query()
        ->when($search, function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        })->orderby('id' , 'desc')
        ->paginate($perPage);
        return view('admin.portfolio.portfolio_list', compact('portfolios'  , 'perPage' , 'countries'));

    }

  

    public function add(){
        $countries = Country::all();
        return view('admin.portfolio.add_portfolio' , compact('countries'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'link' => 'unique:portfolio,slug',
            'image' => 'mimes:jpeg,jpg,png,gif,webp',  
        ]);
    
        $portfolioPath = null;
    
        if ($request->hasFile('image')) {
            $portfolio = $request->file('image');
    
            $portfolioImage = Image::make($portfolio);
            if ($portfolioImage->width() < 1200 || $portfolioImage->height() < 1200) {
                return back()->with(['error_message' => 'Portfolio image must be at least 1200x1200 pixels.']);
            }
            $portfolioImage->resize(1200, 1200);
            $portfolioPath = time() . '_portfolio.' . $portfolio->getClientOriginalExtension();
            $folderPath = storage_path('app/public/portfolio');
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0775, true); 
            }
    
            // Save the image
            $portfolioImage->save($folderPath . '/' . $portfolioPath);
        }
    
        Portfolio::create([
            'title' => $request->title,
            'slug' => $request->link,
            'description' => $request->description,
            'image' => $portfolioPath,
            'html_content' => $request->html_content,
            'country' => $request->country,
            'industry' => $request->industry_name,
            'solution' => $request->solution,
        ]);
    
        return redirect()->route('admin.portfolioList')->with('success_message', 'Portfolio created successfully!');
    }

    public function updateStatus(Request $request, $id)
    {
        $portfolio = Portfolio::find($id);
        if ($portfolio->status == 1) {
            $portfolio->status = 0;
        } else {
            $portfolio->status = 1;
        }
        $portfolio->save();
    
        return redirect()->route('admin.portfolioList')->with('success_message', 'Status updated successfully');
    }


    public function update(Request $request, $id)
    {

      $validated = $request->validate([
          'image' => 'mimes:jpeg,jpg,png,gif,webp',  
      ]);

        $portfolio = Portfolio::find($id);

        if ($request->hasFile('image')) {
            // Delete old portfolio image if exists
            $portfolioImage = $request->file('image');
            $image = Image::make($portfolioImage);

            $width = $image->width();
            $height = $image->height();

            if ($width < 1200 || $height < 1200) {
                return back()->with(['error_message' => 'Portfolio image must be at least 1200x1200 pixels.']);
            }


            $image->resize(1200, 1200);

            
         if($portfolio->image && file_exists(storage_path('app/public/portfolio/' . $portfolio->image))) {
            unlink(storage_path('app/public/portfolio/' . $portfolio->image));
        }

            $portfolioPath = time() . '_portfolio.' . $portfolioImage->getClientOriginalExtension();
            $image->save(storage_path('app/public/portfolio/' . $portfolioPath));
            $portfolio->image = $portfolioPath;
        }

        $portfolio->title = $request->title;
        $portfolio->slug = $request->link;
        $portfolio->description = $request->description;
        $portfolio->html_content = $request->html_content;
        $portfolio->country = $request->country;
        $portfolio->industry = $request->industry_name;
        $portfolio->solution = $request->solution;
        $portfolio->save();
        return redirect()->route('admin.portfolioList')->with('success_message', 'Portfolio updated successfully!');


    }


    public function delete(string $id)
    {

      $portfolio = Portfolio::find($id);
      $portfolio->delete();
      return redirect()->route('admin.portfolioList')->with('success_message', 'Portfolio deleted successfully!');


    }
    

}

