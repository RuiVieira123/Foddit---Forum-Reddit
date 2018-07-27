@extends('layouts.app')

@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <h1>Home</h1>
    @auth
        <p>
            <a href="/posts/create" class="btn btn-info">Create post</a>
        </p>
    @endauth
    <table class="table">
        <thead>
        <tr>
            <th>Score</th>
            <th>Title</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->rate }}</td>
                <td><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>
                <td>{{ date('d/m', strtotime($post->created_at)) }}</td>
                {{--<td>--}}
                {{--@switch($post->status)--}}

                {{--@case(true)--}}
                {{--Aberto--}}
                {{--@break--}}
                {{--@case(false)--}}
                {{--Fechado--}}
                {{--@break--}}
                {{--@default--}}
                {{--Desconhecido--}}
                {{--@endswitch--}}
                {{--</td>--}}
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        {{ $posts->links() }}
        </tfoot>
    </table>
@endsection