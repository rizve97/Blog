@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Category ({{$category->title}})</div>

                <div class="card-body">
                    <a href="{{route('category.index')}}" class="btn btn-success btn-block">Category Index</a>
                    <table class="table table-borderd">
                            @if($category->posts->count() <= 0)
                                <tr>
                                    <td colspan="3" class="text-center">
                                        No Post Found
                                    </td>
                                </tr>
                            @else
                                @foreach($category->posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->user->name}}</td>
                                    </tr>
                                @endforeach
                            @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
