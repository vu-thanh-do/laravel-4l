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
       GIÀY CÔNG SỞ SIÊU NHẸ
      </li>
      <li>
       GIÀY CAO NAM
      </li>
      <li>
       GIÀY THIẾT KẾ
      </li>
      <li>
       GIÀY CÔNG SỞ
      </li>
      <li>
       GIÀY THỂ THAO
      </li>
      <li>
       GIÀY CAO CẤP PREMIUM
      </li>
     </ul>
     <hr/>
     <h5>
      SIZE
     </h5>
     <div class="size-buttons">
      <button class="btn btn-outline-secondary">
       38
      </button>
      <button class="btn btn-outline-secondary">
       39
      </button>
      <button class="btn btn-outline-secondary">
       40
      </button>
      <button class="btn btn-outline-secondary">
       41
      </button>
      <button class="btn btn-outline-secondary">
       42
      </button>
      <button class="btn btn-outline-secondary">
       43
      </button>
      <button class="btn btn-outline-secondary">
       XL
      </button>
      <button class="btn btn-outline-secondary">
       XXL
      </button>
     </div>
     <hr/>
     <h5>
      LỌC GIÁ
     </h5>
     <div class="filter-price">
      <input class="form-range range-slider" max="1295000" min="685000" step="1000" type="range"/>
      <div class="d-flex justify-content-between">
       <span>
        685 000₫
       </span>
       <span>
        1 295 000₫
       </span>
      </div>
     </div>
    </div>
    <div class="col-md-9">
     <h5>
      GIÀY
     </h5>
     <p>
      Hiển thị 1–18 của 78 kết quả
     </p>
     <div class="row">
      <div class="col-md-4">
       <div class="product-card">
        <img alt="Brown leather shoes on wooden floor" height="300" src="https://storage.googleapis.com/a1aa/image/deqBLpXosETQEy0gLn5rgchFiWiCOBkzKrTOCqHarBcqdJ3JA.jpg" width="300"/>
        <div class="card-body">
         <span class="badge bg-primary">
          Giảm giá!
         </span>
         <h6>
          SẢN PHẨM MỚI
         </h6>
         <p class="price">
          970,000₫
         </p>
         <p class="old-price">
          1,295,000₫
         </p>
         <p class="sold">
          Đã bán 136
         </p>
         <button class="btn btn-outline-secondary">
          <i class="fas fa-shopping-cart">
          </i>
          Thêm vào giỏ hàng
         </button>
        </div>
       </div>
      </div>
      <div class="col-md-4">
       <div class="product-card">
        <img alt="Black leather shoes on brown background" height="300" src="https://storage.googleapis.com/a1aa/image/NeXE9yRTndynTCVfJHY0qRG0wqLDJe7syl6suUuWQQdj2lcnA.jpg" width="300"/>
        <div class="card-body">
         <span class="badge bg-primary">
          Giảm giá!
         </span>
         <h6>
          GIÀY
         </h6>
         <p class="price">
          970,000₫
         </p>
         <p class="old-price">
          1,295,000₫
         </p>
         <p class="sold">
          Đã bán 184
         </p>
         <button class="btn btn-outline-secondary">
          <i class="fas fa-shopping-cart">
          </i>
          Thêm vào giỏ hàng
         </button>
        </div>
       </div>
      </div>
      <div class="col-md-4">
       <div class="product-card">
        <img alt="Brown leather shoes with buckle on grey background" height="300" src="https://storage.googleapis.com/a1aa/image/Lpu3iHHDjyJYGF4uGfV3g35hmLDAoxZHu094xR9XXInpdJ3JA.jpg" width="300"/>
        <div class="card-body">
         <span class="badge bg-primary">
          Giảm giá!
         </span>
         <h6>
          GIÀY
         </h6>
         <p class="price">
          955,000₫
         </p>
         <p class="old-price">
          1,265,000₫
         </p>
         <p class="sold">
          Đã bán 98
         </p>
         <button class="btn btn-outline-secondary">
          <i class="fas fa-shopping-cart">
          </i>
          Thêm vào giỏ hàng
         </button>
        </div>
       </div>
      </div>
      <!-- Repeat similar blocks for other products -->
     </div>
    </div>
   </div>
  </div>
@endsection
