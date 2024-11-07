@extends('client.layouts.master')
@section('content')
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 sidebar">
                <h5>
                    TÌM SẢN PHẨM PHÙ HỢP
                </h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ route('featured-products') }}" class="btn btn-outline-success {{ !isset($categoryId) ? 'active' : '' }}">
                            Tất cả sản phẩm
                        </a>
                    </li>
                    @foreach ($categories as $category)
                    <li>
                        <a href="{{ route('featured-products', ['category_id' => $category->id]) }}" class="btn btn-outline-success {{ (isset($categoryId) && $categoryId == $category->id) ? 'active' : '' }}">
                            {{ $category->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
                <hr />
                <h5>
                    SIZE
                </h5>
                <div class="size-buttons">
                    <button class="btn btn-outline-secondary">38</button>
                </div>
                <hr />
                <h5>
                    LỌC GIÁ
                </h5>
                <div class="filter-price">
                    <input class="form-range range-slider" max="1295000" min="685000" step="1000" type="range" />
                    <div class="d-flex justify-content-between">
                        <span>685 000₫</span>
                        <span>1 295 000₫</span>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <h5>GIÀY</h5>
                <p>Hiển thị {{ $products->count() }} kết quả</p>
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="product-card">
                            <img alt="{{ $product->name }}" height="300" src="{{ $product->image_url }}" width="300" />
                            <div class="card-body">
                                <span class="badge bg-primary">Giảm giá!</span>
                                <h6>{{ $product->name }}</h6>
                                <p class="price">{{ number_format($product->price, 0, ',', '.') }}₫</p>
                                <p class="old-price">{{ number_format($product->old_price, 0, ',', '.') }}₫</p>
                                <p class="sold">Đã bán {{ $product->sold }}</p>
                                <button class="btn btn-outline-secondary">
                                    <i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
