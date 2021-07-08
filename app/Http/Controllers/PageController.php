<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Photo;

use Image;
use File;

class PageController extends Controller
{

  public function home(){
    $clients = Photo::where('b_type','client')->orderBy('priority', 'asc')->get();
    $own = Photo::where('b_type','own')->orderBy('priority', 'asc')->get();
    $logo =Photo::where('b_type','logo')->orderBy('priority', 'asc')->get();
      return view('frontend.pages.myapp.index', compact('clients','own','logo'));
  }

  public function product(){
    $products = Photo::where('b_type','man')->orwhere('b_type','woman')->orderBy('priority', 'desc')->get();
      return view('frontend.pages.product.index', compact('products'));
  }

  public function manproduct()
  {
    $man = Photo::where('b_type','man')->orderBy('priority', 'asc')->get();
      return view('frontend.pages.product.productcategory.men.index', compact('man'));
  }
  public function womanproduct()
  {
    $woman = Photo::where('b_type','woman')->orderBy('priority', 'asc')->get();
      return view('frontend.pages.product.productcategory.women.index', compact('woman'));
  }

}
