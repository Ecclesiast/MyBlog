@extends('main')

@section('title', '| Home Page')

@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1 class="display-3">Welcome to my blog!</h1>
            <p class="lead">Thanks for visiting! Please, read my latest post :)</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="#" role="button">Latest post</a>
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          @foreach($posts as $post)
            <div class="post">
              <h3>{{ $post->title }}</h3>
              <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? '...' : '' }}</p>
              <a href='/posts/{{ $post->id }}' class="btn btn-primary">Read more</a>
            </div>

            <hr>
          @endforeach
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <h2>SideBar</h2>
        </div>
      </div>
  @endsection
