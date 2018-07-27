@extends('layouts.app')

@section('content')
    <p>
    <form action="/posts/{{ $post->id }}" method="post">
        <a href="/posts/" class="btn btn-info">Back</a>
        @if($user_id == $post->user->id)
            @if($post->status == true)
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-success">Edit</a>
                @method("DELETE")
                @csrf
                <input type="submit" class="btn btn-danger" value="Archive">
            @endif
        @endif
    </form>
    </p>
    <h1>{{ $post->title }}</h1><br>
    <div class="form-group">
        <label for="nationality">Content</label>
        <textarea disabled type="text" name="body" class="form-control"
                  placeholder="No details needed... :(">{{ $post->body }}</textarea>
    </div>

    <div class="form-group">
        <label>Comments</label><br>
        @if($post->status == true)
            @Auth
                <a href="/comments/create/{{ $post->id }}" class="btn btn-secondary">Comment</a><br>
            @endauth
        @endif
        @if(sizeof($post->comments) != 0)
            @foreach ($post->comments as $comment)
                <br><textarea class="form-control" disabled>{{ $comment->body }}</textarea><br>
            @endforeach
        @else
            <br><p>Be the first to comment! :)</p> <br>
        @endif
    </div>
@endsection