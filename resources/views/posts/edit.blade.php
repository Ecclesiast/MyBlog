@extends('main')

@section('title', '| Edit Post')

@section('content')

    <div class="row">
        
        <div class="col-md-8">
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ["class" => "form-control form-control-lg"]) }}

            {{ Form::label('body', 'Body:', ["class" => "form-spacing-top"]) }}
            {{ Form::textarea('body', null, ["class" => "form-control"]) }}

            
        </div>
        
        <div class="col-md-4">
            <div class="card bg-light">
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-5">Created At:</dt>
                        <dd class>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
                    </dl>
                    
                    <dl class="row">
                        <dt class="col-sm-5">Last Updated:</dt>
                        <dd>{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</dd>
                    </dl>

                    <hr>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            {{ Form::submit('Save', ["class" => "btn btn-primary btn-block"]) }}
                        </div>
                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                        </div>                    
                    </div>             
                </div>     
            </div> 
        </div>
        {!! Form::close() !!}
    </div>

@stop