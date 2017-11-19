@extends('layouts.app')

@section('content')
<div class="container">

    <ol class="breadcrumb">
        <li><a href="/">Главная</a></li>
        <li class="active">Лекция</li>
    </ol>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div>
        <div>
            <h2>{{$lection->title}}</h2>
        </div>

        <div style="margin-top: 20px; margin-bottom: 20px">
            <p>{{$lection->description}}</p>
        </div>

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="{{$lection->url}}"></iframe>
        </div>

        <div style="margin-top: 20px">
            <a href="/tests/{{$lection->test->id}}">
                <button type="button" class="btn btn-primary">Перейти к тесту</button>
            </a>
        </div>
    </div>

</div>
@endsection