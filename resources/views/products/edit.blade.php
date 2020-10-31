@extends("products.layout")

@section("content")

<div class="container-fluid mt-5">

    <div class="row mb-3">
        <div class="col-sm">
            <div class="float-left">
                <h2 style="color: #0275d8;">
                    Edit Product
                </h2>
            </div>
            <div class="float-right">
                <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    @if($errors->any())

    <div class="alert alert-danger alert-dismissible fade show">
        <strong>There is some error with your input!</strong>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

    @endif

    <form action="{{route('products.update', $product->id)}}" method="POST">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name:" value="{{$product->name}}">
        </div>
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter Brand:" value="{{$product->brand}}">
        </div>
        <div class="form-group">
            <label for="detail">Detail</label>
            <textarea name="detail" class="form-control" id="detail" placeholder="Enter Detail:">{{$product->detail}}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price:" value="{{$product->price}}">
        </div>
        <center>
            <button type="submit" class="btn btn-primary">Update</button>
        </center>

    </form>

</div>

@endsection
