@extends('users/layout')

@section('content')
<nav class="header-nav">
    <h1>Comment Of Users</h1>
</nav>
<main>
    <div class="container">
        <section class="title-section">
            <h2 class="main-title">PAGE TITLE MAIN</h2>
            {{-- <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                <input type="text" placeholder="Search.." name="search2">
                <button><i class="fa fa-search"></i></button>
            </form> --}}
            {{-- <a href="" class="button-create">Create</a> --}}
        </section>
        <table class="main-table">
            <tr>
                <th>Id</th>
                <th>Content</th>
                <th>User Id</th>
                {{-- <th>Show Users</th> --}}
            </tr>
            @foreach ($comments as $comment)
            <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->content}}</td>
                <td>{{$comment->user_id}}</td>
                {{-- <td> --}}
                    {{-- <a href="/edit.html" class="button-edit">Show</a> --}}
                {{-- </td> --}}
                {{-- <td>
                    <a href="" class="button-delete">Delete</a>
                </td> --}}
            </tr>
            @endforeach
        </table>
    </div>
</main>
@endsection