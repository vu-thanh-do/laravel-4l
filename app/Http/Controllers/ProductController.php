<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function showProducts()
    {
        $products = Product::all(); // Lấy tất cả sản phẩm từ bảng `products`
        return view('client.components.featured-product', compact('products'));
    }
    public function seeMore()
    {
        $products = Product::all(); // Lấy tất cả sản phẩm từ bảng `products`
        return view('client.components.see-more-product', compact('products'));
    }
     public function show($id)
    {
        // Lấy sản phẩm theo ID
        $product = Product::findOrFail($id);

        // Trả về view chi tiết sản phẩm
        return view('client.components.product-detail', compact('product'));
    }

}
