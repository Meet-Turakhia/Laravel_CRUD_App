@extends("products.layout")

@section("content")
<div class="container-fluid mt-5">

    <div class="row mb-3">
        <div class="col-sm">
            <div class="float-left">
                <h2 style="color: #0275d8;">Laravel Crud App</h2>
            </div>
            <div class="float-right">
                <a href="{{route('products.create')}}" class="btn btn-primary">
                    Create New Product
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get("success"))

    <div class="alert alert-success alert-dismissible fade show">
        <p>{{$message}}</p>
    </div>

    @endif

    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Detail</th>
            <th>Price</th>
            <th style="text-align: center;">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{$i = $i + 1}}</td>
            <td style="text-align: justify;">{{$product->name}}</td>
            <td style="text-align: justify;">{{$product->brand}}</td>
            <td style="text-align: justify;">{{$product->detail}}</td>
            <td style="text-align: justify;">{{$product->price}}</td>
            <td style="text-align: center;">
                <form action="{{route('products.destroy', $product->id)}}" method="POST">
                    <a class="btn btn-info" href="{{route('products.show', $product->id)}}">Show</a>
                    <a class="btn btn-warning" href="{{route('products.edit', $product->id)}}">Edit</a>
                    @csrf

                    @method("DELETE")

                    <button onclick="return(confirm('Are you sure, you want to delete the product?'))" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

</div>

@endsection
