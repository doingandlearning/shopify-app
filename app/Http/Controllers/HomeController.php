<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OhMyBrew\ShopifyApp\Facades\ShopifyApp;

class HomeController extends Controller
{
  public function getIndex() {
//    $shop = ShopifyApp::shop();
//    $request = $shop->api()->rest('GET', '/admin/products.json');
//    var_dump(count($request->body->products));
    return view('welcome');
  }

  public function getNewDiscountForm() {
    return view('create_discount');
  }
}
