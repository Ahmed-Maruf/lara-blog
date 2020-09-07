@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $thread->title }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <article>
                            <div class="body">
                                {{ $thread->body }}
                            </div>
                        </article>
                    </div>
                    <div class="card-header">{{ __('Reply') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <article>
                            @foreach($thread->replies as $reply)
                                <div class="body">
                                    <div class="card-header"><a href="">{{ $reply->user->name }}</a> replied {{ $reply->created_at->diffForHumans() }}</div>
                                    {{ $reply->body }}
                                </div>
                                <hr>
                            @endforeach
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
