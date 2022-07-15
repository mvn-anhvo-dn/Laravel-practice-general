@extends('users/layout')

@section('content')
<nav class="header-nav">
    <h1>Detail Users : <i>{{$userDetail->name}}</i></h1>
</nav>
<main>
    <div class="container">
        <section class="title-section">
            <h2 class="main-title">PAGE TITLE MAIN</h2>
            <a href="{{ route('users.list-user') }}" class="button-comments">User Lists</a>
        </section>
        <table class="main-table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Tel</th>
                <th>Province</th>
            </tr>
            <tr>
                <td>{{$userDetail->id}}</td>
                <td>{{$userDetail->name}}</td>
                <td>{{$userDetail->email}}</td>
                <td>{{$userDetail->profile->address}}</td>
                <td>{{$userDetail->profile->tel}}</td>
                <td>{{$userDetail->profile->province}}</td>
            </tr>
    </div>
</main>
@endsection