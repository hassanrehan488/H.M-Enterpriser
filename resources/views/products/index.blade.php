@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-head">
        <div><small>OUR COLLECTION</small><h1>{{ __('messages.premium') }}</h1></div>
        <form method="get" class="filters">
            <select name="category" onchange="this.form.submit()">
                <option value="all">All</option>
                <option value="floral">Floral</option>
                <option value="geometric">Geometric</option>
                <option value="classic">Classic</option>
                <option value="modern">Modern</option>
                <option value="luxury">Luxury</option>
            </select>
        </form>
    </div>
    <div class="grid">
        @foreach($products as $product)
            @include('products.card', ['product' => $product])
        @endforeach
    </div>
    <div class="pagination">{{ $products->links() }}</div>
</section>
@endsection
