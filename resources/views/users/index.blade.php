@extends('layouts.app')

@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <h1>Users</h1>

    <div class="mb-3 clearfix"></div>

    <table class="table">
        <thead>
        <tr>
            <th style="width: 45%;">Username</th>
            <th style="width: 45%;">E-mail</th>
            <th style="width: 10%;" class="text-right" colspan="2">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td><a href="/users/{{ $user->id }}/edit">{{ $user->username }}</a></td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        {{ $users->links() }}
        </tfoot>
    </table>
@endsection