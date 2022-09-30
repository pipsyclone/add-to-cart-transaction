<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\cart;
use App\Models\transaksi;
use Str;
use Redirect;

class ProsesController extends Controller {
    public function produk () {
        $dataProduct = produk::all();
        return view('produk', [
            'dataProduct' => $dataProduct
        ]);
    }

    public function cartView() {
        $dataCart = cart::all();
        $dataCartCount = cart::count();
        return view('cart', [
            'dataCart' => $dataCart,
            'dataCartCount' => $dataCartCount
        ]);
    }

    // Input produk ke cart
    public function addToCartProses($productid) {
        $qty    = 1;
        $produk = produk::where('productid', $productid)->first();

        cart::create([
            'cartid'        => Str::random(10),
            'username'      => 'apiprahmans',
            'productid'     => $produk->productid,
            'product_name'  => $produk->product_name,
            'product_price' => $produk->product_price,
            'quantity'      => $qty
        ]);

        return Redirect::back();
    }

    // Menghapus produk cart sesuai cart id
    public function cartDelete ($cartid) {
        $cart   = cart::where('cartid', $cartid)->first();
        
        cart::where('cartid', $cartid)->delete();
        return Redirect::back();
    }
    // Proses checkout
    public function checkout ($username) {
        $qty    = 1;
        $cart   = cart::where('username', $username)->get();

        foreach ($cart as $key => $val) {
            // Input produk dari cart ke transaksi
            transaksi::insert([
                'transaksiid'   => Str::random(10),
                'username'      => $username,
                'productid'     => $val->productid,
                'product_name'  => $val->product_name,
                'product_price' => $val->product_price,
                'quantity'      => $qty
            ]);

            // Untuk Update Stok dari Produk yang sudah masuk ke transaksi
            $produk = produk::where('productid', $val->productid)->first();
            produk::where('productid', $produk->productid)->update([
                'product_stock' => $produk->product_stock - $qty
            ]);
        }

        cart::where('username', $username)->delete();
        return Redirect::back();
    }
}
