@extends('layouts.app')

@section('content')
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">Главная</a></li>
            @if (Auth::user()->isAdmin())
                <li class="active">Статистика</li>
            @else
                <li class="active">Результаты</li>
            @endif

        </ol>

        @if (Auth::user()->isAdmin())
            <h3>Статистика</h3>
            <hr>

            <p>Всего пользователей: <b>{{$total_users}}</b></p>
            <p>Количество пройденных тестов: <b>{{$total_tests_done}}</b></p>
            <p>Уникальных пользователей сдавших тестов: <b>{{$total_users_done_test}}</b></p>
        @endif

        <hr>

        <div class="panel panel-primary">
            <div class="panel-heading">Результаты</div>
            <div class="panel-body">
                <div class="row">
                    <form method="post" action="/statistics">
                        {{ csrf_field() }}

                        <div class="col-lg-4">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3">Лекция</span>
                                <input type="text" name="lection_title" class="form-control">
                            </div>
                        </div>
                        @if (Auth::user()->isAdmin())
                        <div class="col-lg-4">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3">Пользователь</span>
                                <input type="text" name="user_name" class="form-control" value="{{ old('user_name') }}">
                            </div>
                        </div>
                        @endif

                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary">Фильтр</button>
                        </div>
                    </form>
                </div>

                <hr>

                <table class="table table-sm">
                    <thead>
                    <tr>
                        @if (Auth::user()->isAdmin())
                            <th scope="col">Пользователь</th>
                        @endif
                        <th scope="col">Лекция</th>
                        <th scope="col">Тест</th>
                        <th scope="col">Результат</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($results as $result)
                        <tr>
                            @if (Auth::user()->isAdmin())
                                <td>{{$result->user->name}}</td>
                            @endif
                            <td>{{$result->test->lection->title}}</td>
                            <td>{{$result->test->title}}</td>
                            <td>{{$result->corrects_count}} прав./ {{$result->wrongs_count}} неправ.</td>
                            <td align="right">
                                <a href="/tests/{{$result->test->id}}">
                                    <button type="button" class="btn btn-info">Пройти снова</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>

                @if (Auth::user()->isAdmin())
                    {{ $results->links() }}
                @endif
            </div>
        </div>
    </div>
@endsection