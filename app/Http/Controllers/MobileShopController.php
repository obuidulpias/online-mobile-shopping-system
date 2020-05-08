<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class MobileShopController extends Controller
{
    public function index() {

      $newProducts = Product::where('publication_status', 1)
                                ->orderBy('id','dsce')
                                ->take(8)
                                ->get();
      //return  $newProducts;
      return view('front-end.home.home', [

        'newProducts' => $newProducts
      ]);
    }
    public function categoryProduct($id) {
      $categoryProducts = Product::where('category_id', $id)
                ->where('publication_status', 1)
                ->get();
      //$categories = Category::where('publication_status', 1)->get();
      return view('front-end.category.category-content',[
        'categoryProducts' => $categoryProducts
      ]);
    }
  public function productDetails($id) {
    $product = Product::find($id);
    return view('front-end.product.product-details', ['product' => $product]);
  }

    public function contact() {
      return view('front-end.contact.contact');
    }
}
