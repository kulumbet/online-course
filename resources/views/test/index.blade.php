@extends('layouts.app')

@section('content')
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="/admin/lections">Лекции</a></li>
            <li class="active">Тест</li>
        </ol>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div>
            <div>
                <h2>Создать</h2>
            </div>

            <hr>

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Новый тест</div>
                <div class="panel-body">
                    <form method="post" action="/admin/tests">
                        {{ csrf_field() }}

                        <input type="hidden" name="lection_id" value="{{$id}}">
                        <div class="form-group">
                            <label for="title">Название:</label>
                            <input type="text" name="title" class="form-control" value="">
                        </div>

                        <div id="questions">
                            @php $c = 1; @endphp
                            <div class="form-group">
                                <label for="title">Вопрос {{$c}}:</label>
                                <input type="text" name="questions[new][{{$c}}]" class="form-control" value="">
                            </div>

                            @php $i = 'a'; @endphp
                            @while($i < 'e')
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3">{{$i}})</span>
                                <input type="text" name="answers[new][{{$c}}][]" class="form-control" value="">
                                <span class="input-group-addon">
                                     <input type="radio" name="correct[{{$c}}][]" value="{{$i}}">
                                </span>
                            </div>
                            <br>
                            @php $i++; @endphp
                            @endwhile
                            <br>
                        </div>

                        <br>

                        <a href="#" class="input-question-add-btn">
                            <button type="button" class="btn btn-primary">Ещё вопрос</button>
                        </a>

                        <br><br>

                        <div>
                            <button type="submit" class="btn btn-success">Submit</button>
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
                    '<input type="text" name="answers[new][' + c + '][]" class="form-control" value="">' +
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