@extends('client.layouts.master')

@section('content')
<!-- <div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <div class="product-images">
                @php
                    $images = is_string($product->images) ? json_decode($product->images, true) : $product->images;
                @endphp
                @foreach ($images as $image)
                    <img style="width: 300px; height:300px" src="{{ $image }}" alt="{{ $product->name }}" class="img-fluid main-image">
                @endforeach
            </div>
        </div>

        <div class="col-md-6">
            <h1 class="product-title">{{ $product->name }}</h1>
            <p class="product-category">Category: {{ $product->category->name }}</p>
            <p class="product-size">Size: {{ $product->size }}</p>
            <p class="product-color">Color: {{ $product->color }}</p>
            <p class="product-description">{{ $product->description }}</p>
            <p class="product-price text-primary font-weight-bold">${{ $product->price }}</p>
            <div class="quantity-selector">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" value="1" class="quantity-input">
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-primary add-to-cart-btn">Add to Cart</button>
                <button class="btn btn-success buy-now-btn">Buy Now</button>
            </div>
        </div>
    </div>
</div> -->
<div class="containerV2">
    <div class="left-column">
    @php
                    $images = is_string($product->images) ? json_decode($product->images, true) : $product->images;
                @endphp
                @foreach ($images as $image)
                    <img  alt="{{ $product->name }}" height="100" src="{{ $image }}" width="100" />
                @endforeach
    </div>
    <div class="right-column">
        <div class="product-title">
        {{ $product->name }}
        </div>
        <div class="product-code">
            Danh Mục : {{ $product->category->name }} | 136 Đã bán
        </div>
        <div class="product-price">
            <del>
                1,295,000₫
            </del>
            970,000₫
        </div>
        <div class="size-selection">
            <span>
             {{ $product->size }}
            </span>
        </div>
        <div class="product-details">
            <ul>
                <li>
                    Màu sắc: {{ $product->color }}
                </li>
                <li>
                    Chất liệu: Da bò cao cấp
                </li>
                <li>
                    Kiểu dáng: Giày loafer lịch lãm
                </li>
                <li>
                    Đế: Đế IP siêu nhẹ, sản xuất theo dây chuyền khép kín công nghệ Nhật Bản
                </li>
            </ul>
        </div>
        <div class="quantity-selection">
            <span>
                Chọn số lượng
            </span>
            <button>
                -
            </button>
            <input type="text" value="1" />
            <button>
                +
            </button>
        </div>
        <a class="buy-now" href="#">
            MUA NGAY
        </a>
        <a class="contact" href="tel:0968592444">
            <i class="fas fa-phone">
            </i>
            Liên hệ: 0968 592 444
        </a>
        <div class="social-share">
            <span>
                Chia sẻ:
            </span>
            <i class="fab fa-facebook">
            </i>
            <i class="fab fa-twitter">
            </i>
            <i class="fab fa-pinterest">
            </i>
            <div class="like">
                <i class="far fa-heart">
                </i>
                <span>
                    Đã thích (0)
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
