@extends('comments/layout')

@section('content')
<nav class="header-nav">
    <h1>List Comment</h1>
</nav>
<main>
    <div class="container">
        <section class="title-section">
            <h2 class="main-title">PAGE TITLE MAIN</h2>
        </section>
        <table class="main-table">
            <tr>
                <th>Id</th>
                <th>Content</th>
                <th>User Id</th>
                <th>Show Users</th>
                {{-- <th>Delete</th> --}}
            </tr>
            @foreach ($comments as $comment)
            <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->content}}</td>
                <td>{{$comment->user_id}}</td>
                <td>
                    <a href="{{ url('/comments/'.$comment->user_id.'/users') }}" class="button-edit">Show</a>
                </td>
                {{-- <td>
                    <a href="" class="button-delete">Delete</a>
                </td> --}}
            </tr>
            @endforeach
        </table>
    </div>
</main>
@endsection