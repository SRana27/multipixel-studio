<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function addCarousel()
    {
        return view('admin.carousel.add_new _carousel');
    }

    public function saveCarousel(Request $request)
    {
        Carousel::storeCarousel($request);
        return redirect('/add-carousel')->with('message','carousel add successfully');
    }

    public function manageCarousel()
    {
             return view('admin.carousel.manage_carousel',
            ['carousels'=>Carousel::orderBy('id','desc')->get()]);

    }

    public function editCarousel($carousel_id)
    {
        return view('admin.carousel.edit_carousel',
        ['carousel'=>Carousel::find($carousel_id)]);
    }

    public function updateCarousel(Request $request)
    {
        Carousel::storeCarousel($request);
        return redirect('/manage-carousel')->with('message','carousel update successfully');
    }


    public function statusUpdate($carousel_id)
    {
        Carousel::updateStatus($carousel_id);
        return redirect('/manage-carousel')->with('message','carousel status update successfully');
    }


    public function deleteCarousel(Request $request)
    {
        Carousel::Carousel_delete($request);
        return redirect('/manage-carousel')->with('message','carousel delete successfully');
    }


}
