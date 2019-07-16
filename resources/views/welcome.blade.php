@extends('layouts.app')

@section('content')
    
    @if(Auth::check())
        
        @include('tasks.tasks', ['tasks' => $tasks])
        
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>タスク管理サービスにようこそ！</h1>
                {!! link_to_route('signup.get', '会員登録', [], ['class'=>'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection