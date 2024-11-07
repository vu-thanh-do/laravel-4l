<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
    public function seeMore(Request $request)
    {
        $categoryId = $request->input('category_id'); // Nhận giá trị category_id từ request

        // Kiểm tra nếu có category_id, lọc sản phẩm theo category_id
        if ($categoryId) {
            $products = Product::where('category_id', $categoryId)->get();
        } else {
            $products = Product::all(); // Nếu không có category_id, lấy tất cả sản phẩm
        }
        $categories = Category::all(); // Lấy tất cả categories
        return view('client.components.see-more-product', compact('products', 'categories', 'categoryId'));
    }
    public function getProductByCategory($id)
    {
        $productForCategory = Product::where('category_id', $id)->get();
        $products = Product::all();
        return view('client.components.see-more-product', compact('productForCategory', 'products'));
    }
    public function show($id)
    {
        // Lấy sản phẩm theo ID
        $product = Product::findOrFail($id);
        // Trả về view chi tiết sản phẩm
        return view('client.components.product-detail', compact('product'));
    }
}
