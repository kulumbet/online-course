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
                <h2>Редактирование</h2>

            </div>

            <hr>

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Лекция №{{$lection->id}}</div>
                <div class="panel-body">
                    <form method="post" action="/admin/lections/{{$lection->id}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put" />
                        <div class="form-group">
                            <label for="title">Название:</label>
                            <input type="text" name="title" class="form-control" value="{{$lection->title}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Описание:</label>
                            <textarea class="form-control" name="description">{{$lection->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="url">Ссылка:</label>
                            <input type="text" name="url" class="form-control" value="{{$lection->url}}">
                            <br>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{$lection->url}}"></iframe>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>

                    <br>
                    @if (isset($lection->test->id))
                        <a href="/admin/tests/{{$lection->test->id}}/edit">
                            <button type="button" class="btn btn-primary">Редактировать тест</button>
                        </a>
                    @else
                        <a href="/admin/tests/add/{{$lection->id}}">
                            <button type="button" class="btn btn-primary">Создать тест</button>
                        </a>
                    @endif
                </div>
            </div>

        </div>

    </div>
@endsection