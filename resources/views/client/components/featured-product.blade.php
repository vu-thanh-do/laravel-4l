<div class="site-section block-3 site-blocks-2 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>Featured Products</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($products->slice(0, 3) as $index => $product)
                @if ($index % 3 == 0 && $index != 0)
                    </div>
                    <div class="row">
                @endif
                <div class="col-md-4 mb-4">
                    <div class="block-4 text-center">
                        <figure class="block-4-image">
                            @php
                                $images = is_string($product->images) ? json_decode($product->images, true) : $product->images;
                            @endphp
                            <img src="{{ $images[0] }}" style="width: 200px;height: 200px;" alt="{{ $product->name }}" class="img-fluid">
                        </figure>
                        <div class="block-4-text p-4">
                            <h3><a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a></h3>
                            <p class="mb-0">Size: {{ $product->size }} - Color: {{ $product->color }}</p>
                            <p class="text-primary font-weight-bold">$50</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div  style="display:flex; justify-content:center">
            <button class="btn btn-success">Xem Thêm</button>
        </div>
    </div>
</div>
