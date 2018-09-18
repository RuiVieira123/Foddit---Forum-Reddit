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
        <label>Content</label>
             @if(empty($post->body ))
            <pre class="form-control" style="background: #e8ecef">No details needed... :(</pre>
            @else
            <pre class="form-control" style="background: #e8ecef">{{ $post->body }}</pre>
            @endif
    </div>

    <h4> Submitted by {{ $post->user->username}}</h4>

    <div class="form-group">
        <label>Comments</label><br>
        @if($post->status == true)
            @Auth
                <form action="/comments/create/{{ $post->id }}" method="get">
                    <div class="form-group">
                        <h1>Comment on {{ $post->title }}</h1>
                        <input hidden name="post_id" value="{{ $post->id }}">
                    </div>

                    <div class="form-group">
                        <label>Comment</label>
                        <textarea type="text" name="body" class="form-control" placeholder="Say something positive! :)" onkeyup="textAreaAdjust(this)" style="overflow:hidden"></textarea>
                        <script>
                            function textAreaAdjust(o) {
                                o.style.height = "1px";
                                o.style.height = (25 + o.scrollHeight) + "px";
                            }
                        </script>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            @endauth
        @endif
        @if(sizeof($post->comments) != 0)
            @foreach ($post->comments as $comment)
                <br><p>{{ $comment->user->username }}</p>
                <pre class="form-control" style="background: #e8ecef">{{ $comment->body }}</pre>
            @endforeach
        @else
            <br><p>Be the first to comment! :)</p> <br>
        @endif
    </div>
@endsection