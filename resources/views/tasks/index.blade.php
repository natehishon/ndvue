@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Tasks</div>

                    <div class="card-body">
                        @foreach($tasks as $task)
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="mt-0"><a href="{{ $task->url }}">{{$task->title}}</a></h3>
                                    <p class="lead">
                                        Created By:
                                        <a href="{{$task->user->url}}">{{$task->user->name}}</a>
                                        <small class="text-muted">{{$task->created_date}}</small>
                                    </p>
                                    {{Str::limit($task->body, 250)}}
                                </div>
                            </div>
                            <hr>
                        @endforeach
                        {{$tasks->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
