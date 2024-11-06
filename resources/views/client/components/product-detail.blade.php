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
        <img alt="Product Image 1" height="100" src="https://storage.googleapis.com/a1aa/image/4ab1OkUHfC1KFKjKrubmFHYfSZK1ELrYFPkkfIMydSBjalcnA.jpg" width="100" />
        <img alt="Product Image 2" height="100" src="https://storage.googleapis.com/a1aa/image/A7oG3NjvfU1vGimFUVhctPm3PyBcRfmeVSo5UfSJOA860K5OB.jpg" width="100" />
        <img alt="Product Image 3" height="100" src="https://storage.googleapis.com/a1aa/image/PT52afvIB02uYCvwDofofesYuPkuyqeZGlBfEbCa9AXBUrk7E.jpg" width="100" />
        <img alt="Product Image 4" height="100" src="https://storage.googleapis.com/a1aa/image/SdI4DHaDrN5ZINEEa8eR7YSP4a5GY6BLY2gkLsW7J8HqWJ3JA.jpg" width="100" />
        <img alt="Product Image 5" height="100" src="https://storage.googleapis.com/a1aa/image/pPS5hGf8RLzbXSw8P3s68jpBndnBuBqRxHfpuHqNHGelalcnA.jpg" width="100" />
    </div>
    <div class="right-column">
        <div class="product-title">
            SL-03-N
        </div>
        <div class="product-code">
            Mã: N/A | 136 Đã bán
        </div>
        <div class="product-price">
            <del>
                1,295,000₫
            </del>
            970,000₫
        </div>
        <div class="size-selection">
            <span>
                38
            </span>
            <span>
                39
            </span>
            <span>
                40
            </span>
            <span>
                41
            </span>
            <span>
                42
            </span>
            <span>
                43
            </span>
        </div>
        <div class="product-details">
            <ul>
                <li>
                    Màu sắc: Màu đen
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
