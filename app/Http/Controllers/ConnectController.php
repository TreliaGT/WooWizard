<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Automattic\WooCommerce\Client;

class ConnectController extends Controller
{
    public function logout(){
        Session::put('woo_host','foo');
        Session::put('woo_key','foo');
        Session::put('woo_secret','foo');
        return redirect('/');
    }

    public function connection(Request $request){

        $woocommerce = new Client(
            $request->host,
            $request->key,
            $request->secret,
            [
                'wp_api' => true,
                'version' => 'wc/v3',
            ]
        );
        Session::put('woo_host',$request->host);
        Session::put('woo_key',$request->key);
        Session::put('woo_secret',$request->secret);
        Session::save();

        return redirect('/products');
    }
}
