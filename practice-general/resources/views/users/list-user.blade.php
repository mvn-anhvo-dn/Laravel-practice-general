@extends('users/layout')

@section('content')
<nav class="header-nav">
    <h1><a href="/users/index">List Users</a> </h1>
</nav>
<main>
    <div>
        <section class="title-section">
            <h2 class="main-title">PAGE TITLE MAIN</h2>
            <a href="{{ route('users.create') }}" class="button-create">Create</a>
            <a href="{{ route('comments.index') }}" class="button-comments">Show All Comments</a>
            <a href="{{ route('users.search') }}" class="button-search">Search</a>
        </section>
        <table class="main-table">
            <tr>
                <th>Id</th>
                <th><a href="?sort-by=name&sort-type={{ $sortType }}">Name</a></th>
                <th>Email</th>
                <th>Count Comments</th>
                <th>Count Posts</th>
                <th>Comments</th>
                <th>Information</th>
            </tr>
            @foreach ($users as $key => $us)
            <tr>
                <td>
                    {{$us->id}}
                </td>
                <td>
                    <a href="{{ url('/posts/'.$us->id.'/shows') }}">{{$us->name}}</a>
                </td>
                <td>{{$us->email}}</td>
                <td>{{count($us->comments)}}</td>
                <td>{{count($us->posts)}}</td>
                <td>
                    <a href="{{ url('/users/'.$us->id.'/comments') }}" class="button-edit">Display</a>

                    {{-- <a href="/edit.html" class="button-edit">Show</a> --}}
                </td>
                <td>
                    <a href="{{ url('/users/'.$us->id ) }}" class="button-show">Show</a>
                </td>
            </tr>
            @endforeach
        </table>
            {{$users->links()}}
    </div>
</main>
@endsection
