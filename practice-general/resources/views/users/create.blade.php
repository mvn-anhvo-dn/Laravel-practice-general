@extends('users/layout-create')

@section('content')
<header>
    <nav class="header-nav">
        <h1>Create User</h1>
    </nav>
</header>
<main>
    <div class="container">
        <form action="{{ route('users.store') }}" method="POST">
          @csrf
            <div class="title">
              <i class="fas fa-pencil-alt"></i> 
              <h2>Create here</h2>
            </div>
            <div class="info">
              <input class="fname" type="text" name="name" placeholder="Name" for="name" id="name">
              <input type="email" name="email" id="email" for="email" placeholder="Email">
              {{-- <input type="text" name="name" placeholder="Phone number"> --}}
              <input type="password" name="password" id="password" placeholder="Password">
              {{-- <select>
                <option value="course-type" selected>Course type*</option>
                <option value="short-courses">Short courses</option>
                <option value="featured-courses">Featured courses</option>
                <option value="undergraduate">Undergraduate</option>
                <option value="diploma">Diploma</option>
                <option value="certificate">Certificate</option>
                <option value="masters-degree">Masters degree</option>
                <option value="postgraduate">Postgraduate</option>
              </select> --}}
            </div>
            <button type="submit" href="/">Create</button>
          </form>

    </div>
    
</main>
@endsection