@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create product</h2>
        <form action="{{route('products.update', ['product' => $product])}}" method="POST">
            @method('PUT')
            @csrf
            <div class="row p-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Name</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{$product->name}}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Category_id:</strong>
                        <select type="number" name="category_id" class="form-control" placeholder="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" @selected($category->id == $product->category_id)>{{$category->id}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row p-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>price</strong>
                        <input type="number" name="price" class="form-control" placeholder="price" value="{{$product->price}}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>img:</strong>
                        <input type="file" name="img" class="form-control" placeholder="img" value="{{$product->img}}">
                    </div>
                </div>
            </div>

            <div class="row p-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>status</strong>
                        <input name="status" type="checkbox" value="1" @checked($product->status)>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <textarea class="form-control" name="description" placeholder="Description" value="{{$product->description}}">
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>
@endsection
