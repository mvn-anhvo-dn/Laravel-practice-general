@extends('comments/layout')

{{-- @section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Posts Detail</h3>
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th> --}}
                            {{-- <th>
                                Title
                            </th> --}}
                            {{-- <th>
                                Content
                            </th> --}}
                            {{-- <th>
                                Action
                            </th> --}}
                            {{--
                        </tr>
                    </thead>
                    <tbody> --}}

                        {{--
                        @foreach ($post as $ps)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$ps->title}}</td>
                            <td>{{$ps->content}}</td>
                            <td>
                                <form action="{{ route('posts.delete', $ps-> id) }}" method="POST">
                                    <a href="{{ url('/posts/delete' . '/' . $ps-> id) }}" class="btn btn-info">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach --}}
                        {{--
                    </tbody>
                    </table>
                </div>
            </div>
            @endsection --}}


            @section('content')
            <nav class="header-nav">
                <h1>Post Of <i>User</i></h1>
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
                        </tr>
                        @foreach ($posts as $ps)
                        <tr>
                            <td scope="row">{{$ps->id}}</td>
                            <td>{{$ps->content}}</td>
                            <td>{{$ps->user_id}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </main>
            @endsection