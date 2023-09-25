@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{$post->title}}</div>

                <div class="card-body">
                    <a href="{{route('post.index')}}" class="btn btn-success btn-block">Post Index</a>
                    <hr>
                    <p>
                        {{$post->body}}
                    </p>
                    <hr>
                    <div class="text-center">
                        {{$post->comments->count()}} Comments
                        <hr>
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('comment',['id' =>$post->id])}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="body">Comment</label>
                                        <textarea name="body" id="body" class="form-control" cols="20" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Post Comment" class="btn btn-block btn-primary">
                                    </div>
                                </form>
                                <hr>
                                @if($post->comments->count() > 0)
                                @foreach($post->comments as $comment)
                                    <div class="text-success">
                                        {{$comment->body}}
                                    </div>
                                    <hr>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection