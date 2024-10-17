<div class="product-card">
    <div class="product-image">
        <img src="{{ $product->getImageUrl() }}" alt="{{ $product->name }}">
    </div>
    <div class="product-info">
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->price }}</p>
        <span>Rating: {{ $product->rating }}</span>
    </div>
</div>
