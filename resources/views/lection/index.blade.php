@extends('layouts.app')

@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li class="active">Главная</li>
    </ol>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <table class="table table-sm">
        <thead>
        <tr>
            <th scope="col">Лекции</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>

        @foreach($lections as $lection)
            <tr>
                <td>{{$lection->title}}</td>
                <td align="right">
                    @if (isset(Auth::user()->id) && Auth::user()->isAdmin())
                        <a href="/admin/lections/{{$lection->id}}/edit">
                            <button type="button" class="btn btn-success">Редактировать</button>
                        </a>

                        @if (isset($lection->test->id))
                            <a href="/admin/tests/{{$lection->test->id}}/edit">
                                <button type="button" class="btn btn-primary">Редактировать тест</button>
                            </a>
                        @else
                            <a href="/admin/tests/add/{{$lection->id}}">
                                <button type="button" class="btn btn-primary">Создать тест</button>
                            </a>
                        @endif

                    @else
                        <a href="/lections/{{$lection->id}}">
                            <button type="button" class="btn btn-success">Открыть</button>
                        </a>
                        <a href="/tests/{{isset($lection->test->id) ? $lection->test->id : ''}}">
                            <button type="button" class="btn btn-primary">Тест</button>
                        </a>
                    @endif

                </td>
            </tr>

        @endforeach

        </tbody>

    </table>


        {{ $lections->links() }}

</div>
@endsection
