@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Categories</div>

                <div class="card-body">
                    <a href="{{route('category.create')}}" class="btn btn-success btn-block">Create New Category</a>
                    <table class="table table-borderd">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Total Posts</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($categories->count() <= 0)
                                <tr>
                                    <td colspan="4" class="text-center">
                                        No Category Exists.
                                    </td>
                                </tr>
                            @else
                                @foreach($categories as $cat)
                                    <tr>
                                        <td>{{$cat->id}}</td>
                                        <td>{{$cat->title}}</td>
                                        <td>{{$cat->posts->count()}}</td>
                                        <td>
                                            <a href="{{route('category.edit',['category' => $cat->id])}}" class="btn btn-sm btn-primary"> Edit </a>

                                            <a href="{{route('category.show',['category' => $cat->id])}}" class="btn btn-sm btn-success"> View </a>

                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
