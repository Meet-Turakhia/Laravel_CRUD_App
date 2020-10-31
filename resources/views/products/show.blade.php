@extends("products.layout")

@section("content")

<div class="container mt-5">
    <div class="row">
        <div class="col-sm">
            <div class="float-left">
                <h2 style="color: #0275d8;">View Product</h2>
            </div>
            <div class="float-right">
                <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <div class="container mt-5 p-3" width="200px" style="background-color: #e6e6e6;">
        <label for="name">Name:</label>
        <h4> {{$product->name}}</h4><br>
        <label for="brand">Brand:</label>
        <h4> {{$product->brand}}</h4><br>
        <label for="detail">Detail:</label>
        <h4> {{$product->detail}}</h4><br>
        <label for="price">Price:</label>
        <h4> {{$product->price}}</h4>
    </div>
</div>
@endsection
