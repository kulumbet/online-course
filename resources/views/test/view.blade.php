@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Главная</a></li>
            @if ($test)
            <li><a href="/lections/{{$test->lection->id}}">Лекция</a></li>
            @endif
            <li class="active">Тест</li>
        </ol>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div>
            @if ($test)
                <div>
                    <h2>{{$test->title}}</h2>
                </div>

                <b>Лекция №{{$test->lection->id}}</b>: {{$test->lection->title}}

                <hr>

                <form method="post" action="/tests/{{$test->id}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put" />
                    <div style="margin-top: 20px">
                        @php $i=1; @endphp
                        @foreach($test->questions as $question)
                            <p><b>{{$i . ') ' . $question->text}}</b></p>

                            @php $k = 'a'; @endphp
                            @foreach($question->answers as $answer)
                                <p><input type="radio" name="answer[{{$question->id}}][{{$answer->id}}]" value="{{$k}}"> <label>{{$answer->text}}</label></p>
                                @php $k++; @endphp
                            @endforeach
                            @php $i++; @endphp
                        @endforeach
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success">Завершить тестирование</button>
                    </div>
                </form>
            @else
                <div class="alert alert-danger">
                    <p>Тест для данной лекции отсутствует.</p>
                </div>
            @endif
        </div>

    </div>
@endsection