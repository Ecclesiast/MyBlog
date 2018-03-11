@extends('main')

@section('title', '| About Me')

@section('content')
      <div class="row">
        <div class="col-md-12">
          <h1>About Me</h1>
          <p>This part of the web-site contains an information about me</p>
          I am <strong>{{ $data['fullname'] }}</strong>
          <br>
          My email: <strong>{{ $data['email'] }}</strong>
        </div>
      </div>
@endsection
