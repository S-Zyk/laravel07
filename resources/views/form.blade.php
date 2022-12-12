@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
        <h2>New form for {{$user = auth()->user()->name}}</h2>

        <form action="{{ route('form_create') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="col-md-6 mt-3">
                    <div class="form-group">
                        <strong>Theme</strong>
                        <input type="text" name="theme" class="form-control" placeholder="theme">
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="form-group">
                        <strong>Text:</strong>
                        <textarea class="form-control" name="text" placeholder="Text">
                        </textarea>
                    </div>
                </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
@endsection
