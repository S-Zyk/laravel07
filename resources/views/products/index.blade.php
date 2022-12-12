@extends('layouts.app')

@section('content')
    <div class="container">
    <h2>All products</h2>
    @foreach($products as $product)
        <div class="d-flex p-4 justify-content-between">
            <div>{{$product->id}}</div>
            <div>{{$product->name}}</div>
            <div>{{$product->category_id}}</div>
            <div>{{$product->price}}</div>
            <div>{{$product->img}}</div>
            <div>{{$product->status}}</div>
            <div>{{$product->description}}</div>
            <div><a href="{{route('products.edit', ['product' => $product->id])}}">edit</a></div>
            <div><form action="{{route('products.destroy', ['product' => $product->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
    </div>
@endsection
