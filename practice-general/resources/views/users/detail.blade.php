@extends('users/layout')

@section('content')
<nav class="header-nav">
    <h1>Detail Users : <i>{{$userDetail->name}}</i></h1>
</nav>
<main>
    <div class="container">
        <section class="title-section">
            <h2 class="main-title">PAGE TITLE MAIN</h2>
            <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                <input type="text" placeholder="Search.." name="search2">
                <button><i class="fa fa-search"></i></button>
            </form>
            {{-- <a href="" class="button-create">Create</a> --}}
        </section>
        <table class="main-table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Tel</th>
                <th>Province</th>
                <th>Comment</th>
                <th>Post</th>
            </tr>
            @foreach ($users as $us)
            <tr>
                <td>{{$us->id}}</td>
                <td>{{$us->name}}</td>
                <td>{{$us->email}}</td>
                <td>{{$userDetail->profile->address}}</td>
                <td>{{$userDetail->profile->tel}}</td>
                <td>{{$userDetail->profile->province}}</td>
                {{-- <td>
                    <a href="{{ url('/users/'.$us->id.'/comments') }}" class="button-edit">Display</a> --}}
                    {{-- <a href="/edit.html" class="button-edit">Show</a> --}}
                    {{--
                </td> --}}
                {{-- <td>
                    <a href="" class="button-show">Show</a>
                </td> --}}

                @endforeach
                @foreach ($users as $us)
                @foreach ($us->comments as $comment)
                <td>{{$comment->content}}</td>
                @endforeach
                @endforeach
                @foreach ($users as $us)
                @foreach ($us->posts as $post)
                <td>{{$post->content}}</td>
                @endforeach
                @endforeach
            </tr>
        </table>
    </div>
</main>
@endsection