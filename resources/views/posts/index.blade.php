@extends('main')

@section('title', '| All Posts')


@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create Post</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Created At</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)

                        <tr>
                        <td>{!! substr($post->title, 0, 50) !!}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
                        <td>{!! substr($post->body, 0, 50) !!}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
                            <td>{!! date('M j, Y', strtotime($post->created_at)) !!}</td>
                        <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-light btn-sm" role="button">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-light btn-sm" role="button">Edit</a></td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

@stop