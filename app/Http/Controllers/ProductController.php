<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Automattic\WooCommerce\Client;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $woocommerce = new Client(
            $request->session()->get('woo_host'), 
            $request->session()->get('woo_key'), 
            $request->session()->get('woo_secret'),
            [
                'wp_api' => true, 'version' => 'wc/v3',
            ]
        );
        $products = $woocommerce->get("products", ['per_page'=>50]);
        //var_dump($products);
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $woocommerce = new Client(
              $request->session()->get('woo_host'), 
            $request->session()->get('woo_key'), 
            $request->session()->get('woo_secret'), 
            [
                'wp_api' => true, 'version' => 'wc/v3',
            ]
        );

        $this->validate($request , [ 
            'name' => 'required',
            'price' => 'required'
        ]);

        $name= $request->input('name');
        $price= $request->input('price');
        $description = $request->input('description');
        $on_sale= $request->input('on_sale');
        $sale_price= $request->input('sale_price');
        $stock_statuts= $request->input('stock_status');
        if($on_sale==false) $sale_price=''; 

        $data = [
            'name' => $name,
            'regular_price' => $price,
            'description' => $description,
            'on_sale' => $on_sale,
            'sale_price' => $sale_price,
            'stock_status' => $stock_statuts,
            'categories' => [['id' => $idc]]
            /*'images' => [[
                'src' => $request->file('image')->getRealPath(),
                'name' => $request->file('image')->getClientOriginalName(),
                'alt' => substr($request->file('image')->getClientOriginalName(),2,2) 
            ]] */
            ];
        
        $woocommerce->post('products', $data);

        return redirect('/products');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id , Request $request)
    {
        $woocommerce = new Client(
        $request->session()->get('woo_host'), 
            $request->session()->get('woo_key'), 
            $request->session()->get('woo_secret'),
            [
                'wp_api' => true, 'version' => 'wc/v3',
            ]
        );
        
        $product = $woocommerce->get('products/'.$id);
        return view('products.edit')->with('product',$product);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id, Request $request)
    {
        $woocommerce = new Client(
             $request->session()->get('woo_host'), 
            $request->session()->get('woo_key'), 
            $request->session()->get('woo_secret'),
            [
                'wp_api' => true, 'version' => 'wc/v3',
            ]
        );

        $this->validate($request , [ 
            'name' => 'required',
            'price' => 'required'
        ]);

        $name= $request->input('name');
        $price= $request->input('price');
        $description = $request->input('description');
        $on_sale= $request->input('on_sale');
        $sale_price= $request->input('sale_price');
        $stock_statuts= $request->input('stock_status');
        if($on_sale==false) $sale_price='';
        $data = [
            'name' => $name,
            'regular_price' => $price,
            'description' => $description,
            'on_sale' => $on_sale,
            'sale_price' => $sale_price,
            'stock_status' => $stock_statuts,
            'categories' => [['id' => $idc]]
            ];
        
        $woocommerce->put('products/'.$id, $data);

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id , Request $request)
    {
        $woocommerce = new Client(
           $request->session()->get('woo_host'), 
            $request->session()->get('woo_key'), 
            $request->session()->get('woo_secret'),
            [
                'wp_api' => true, 'version' => 'wc/v3',
            ]
        );
        
        $woocommerce->delete('products/'.$id, ['force' => true]);
        return redirect('/products'); 
    }

   
}
