@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Posts</div>

                <div class="card-body">
                    <a href="{{route('post.create')}}" class="btn btn-success btn-block">Create New Post</a>
                    <table class="table table-borderd">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Total Comments</th>
                                <th>User</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($posts->count() <= 0)
                                <tr>
                                    <td colspan="6" class="text-center">
                                        No Post Exists.
                                    </td>
                                </tr>
                            @else
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->comments->count()}}</td>
                                        <td>
                                            {{$post->user->name}}
                                        </td>
                                        <td>
                                            {{\Carbon\Carbon::parse($post->created_at)}}
                                        </td>
                                        <td>
                                            <a href="{{route('post.edit',['post' => $post->id])}}" class="btn btn-sm btn-primary"> Edit </a>

                                            <a href="{{route('post.show',['category' => $post->id])}}" class="btn btn-sm btn-success"> View </a>

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
