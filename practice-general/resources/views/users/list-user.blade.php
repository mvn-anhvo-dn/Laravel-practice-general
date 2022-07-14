@extends('users/layout')

@section('content')

<nav class="header-nav">
    <h1>List Users</h1>
</nav>
<main>
    <div class="container">
        <section class="title-section">
            <h2 class="main-title">PAGE TITLE MAIN</h2>
            <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                <input type="text" placeholder="Search.." name="search2">
                <button><i class="fa fa-search"></i></button>
            </form>
            <a  href="{{ route('users.create') }}" class="button-create">Create</a>
            <a  href="{{ route('comments.index') }}" class="button-comments">Show All Comments</a>
        </section>
        <table class="main-table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Comments</th>
                <th>Information</th>
            </tr>
            @foreach ($users as $us)
            <tr>
                <td>
                    {{$us->id}}
                </td>
                <td>
                    <a href="{{ url('/posts/'.$us->id.'/shows') }}">{{$us->name}}</a>
                </td>
                <td>{{$us->email}}</td>
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