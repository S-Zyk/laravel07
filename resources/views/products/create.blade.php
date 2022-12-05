@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create product</h2>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="row p-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Name</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Category_id:</strong>
                        <input type="number" name="category_id" class="form-control" placeholder="category_id">
                    </div>
                </div>
            </div>

            <div class="row p-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>price</strong>
                        <input type="number" name="price" class="form-control" placeholder="price">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>img:</strong>
                        <input type="file" name="img" class="form-control" placeholder="img">
                    </div>
                </div>
            </div>

            <div class="row p-3">

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <textarea class="form-control" name="description" placeholder="Description">
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
