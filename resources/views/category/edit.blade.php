@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Edit Category</div>

                <div class="card-body">
                    <form action="{{route('category.update',['category' => $category->id])}}" method="POST">
                        {{method_field('PATCH')}}
                        @csrf
                        <div class="form-group">
                            <label for="title">Title : </label>
                            <input type="text" value="{{$category->title}}" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update" class="btn btn-block btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
