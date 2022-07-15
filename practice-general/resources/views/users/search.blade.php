@extends('users/layout')

@section('content')
<nav class="header-nav">
    <h1><a href="/users/index">List Users</a> </h1>
</nav>
<main>
    <div>
        <section class="title-section">
            <h2 class="main-title">PAGE TITLE MAIN</h2>
            <form style="margin:auto;max-width:300px" type="get" action="{{ url('search') }}" class="example">
                <input placeholder="Search User" name="search2" type="text">
                <button id="btnName" class="btn-search-user"><i class="fa fa-search"></i></button>
            </form>
            <form style="margin:auto;max-width:300px" type="get" action="{{ url('/search/comment') }}" class="example">
                <input placeholder="Search Comment" name="search3" type="text">
                <button class="btn-search-cmt btnComment"><i class="fa fa-search"></i></button>
            </form>
            <form style="margin:auto;max-width:300px" type="get" action="{{ url('/search/post') }}" class="example">
                <input placeholder="Search Post" name="search4" type="text">
                <button class="btn-search-post btnPost"><i class="fa fa-search"></i></button>
            </form>

            {{-- <a href="{{ route('users.create') }}" class="button-create">Create</a>
            <a href="{{ route('comments.index') }}" class="button-comments">Show All Comments</a> --}}
        </section>
        <table class="main-table">
            <tr>
                <th>Id</th>
                <th>Name</th>
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
    </div>
</main>
@endsection
