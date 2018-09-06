@extends('layouts.app')

@section('content')
    <form action="/comments" method="post">
        @include('comments.form')
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection