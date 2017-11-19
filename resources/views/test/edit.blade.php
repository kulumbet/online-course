@extends('layouts.app')

@section('content')
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li class="active">Тест</li>
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
                <div class="panel-heading"><b>Test №{{$test->id}}</b> (Лекция №{{$test->lection->id}}: {{$test->lection->title}})</div>
                <div class="panel-body">
                    <form method="post" action="/admin/tests/{{$test->id}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put" />
                        <div class="form-group">
                            <label for="title">Название:</label>
                            <input type="text" name="title" class="form-control" value="{{$test->title}}">
                        </div>

                        <div id="questions">
                            @php $c = 0; @endphp
                            @foreach($test->questions as $question)
                                @php $c++; @endphp
                                <div class="form-group">
                                    <label for="title">Вопрос {{$c}}:</label>
                                    <input type="text" name="questions[{{$question->id}}]" class="form-control" value="{{$question->text}}">
                                </div>

                                @php $i = 'a'; @endphp
                                @foreach($question->answers as $answer)
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon3">{{$i}})</span>
                                        <input type="text" name="answers[{{$question->id}}][{{$answer->id}}]" class="form-control" value="{{$answer->text}}">
                                        <span class="input-group-addon">
                                             <input type="radio" name="correct[{{$question->id}}][]" value="{{$i}}" {{($question->isCorrect($answer->id)) ? 'checked' : ''}}>
                                        </span>
                                    </div>
                                    <br>
                                    @php $i++; @endphp
                                @endforeach
                            @endforeach
                        </div>

                        <a href="#" class="input-question-add-btn">
                            <button type="button" class="btn btn-primary">Ещё вопрос</button>
                        </a>

                        <br><br>

                        <div>
                            <button type="submit" class="btn btn-success">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <script>
        jQuery(document).ready(function () {
            var c = parseInt('<?php echo $c ;?>');

            //your code here
            questions = $('#questions');
            $('.input-question-add-btn').on('click', function (e) {
                c++;
                questions.append(
                    '<div class="form-group"><label for="title">Вопрос ' + c + ':</label>' +
                    '<input type="text" name="questions[new]['+ c +']" class="form-control" value=""></div>' +
                    '<div class="input-group">\n' +
                    '<span class="input-group-addon" id="basic-addon3">a)</span>\n' +
                    '<input type="text" name="answers[new][' + c + '][]" class="form-control" value="">\n' +
                    '<span class="input-group-addon">' +
                    '<input type="radio" name="correct[' + c + '][]" value="a">' +
                    '</span>' +
                    '</div><br>' +
                    '<div class="input-group">\n' +
                    '<span class="input-group-addon" id="basic-addon3">b)</span>\n' +
                    '<input type="text" name="answers[new][' + c + '][]" class="form-control" value="">\n' +
                    '<span class="input-group-addon">' +
                    '<input type="radio" name="correct[' + c + '][]" value="b">' +
                    '</span>' +
                    '</div><br>' +
                    '<div class="input-group">\n' +
                    '<span class="input-group-addon" id="basic-addon3">c)</span>\n' +
                    '<input type="text" name="answers[new][' + c + '][]" class="form-control" value="">\n' +
                    '<span class="input-group-addon">' +
                    '<input type="radio" name="correct[' + c + '][]" value="c">' +
                    '</span>' +
                    '</div><br>' +
                    '<div class="input-group">\n' +
                    '<span class="input-group-addon" id="basic-addon3">d)</span>\n' +
                    '<input type="text" name="answers[new][' + c + '][]" class="form-control" value="">\n' +
                    '<span class="input-group-addon">' +
                    '<input type="radio" name="correct[' + c + '][]" value="d">' +
                    '</span>' +
                    '</div>' +
                    '<br>'
                );
            });
        });
    </script>
@endsection