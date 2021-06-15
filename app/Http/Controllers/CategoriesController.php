<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Automattic\WooCommerce\Client;
use Illuminate\Support\Facades\Session;
class CategoriesController extends Controller
{
    public function index(Request $request){

        $woocommerce = new Client(
            $request->session()->get('woo_host'), 
            $request->session()->get('woo_key'), 
            $request->session()->get('woo_secret'),
            [
                'wp_api' => true, 'version' => 'wc/v3',
            ]
        );
        $cats = $woocommerce->get("products/categories", ['per_page'=>50]);
        return view('categories.index')->with('cats', $cats);
    }
}
