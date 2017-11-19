<?php
/**
 * Created by PhpStorm.
 * User: kjyer
 * Date: 19-Nov-17
 * Time: 1:42 PM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use App\Models\QuestionAnswer;
use App\Models\Test;
use App\Models\TestQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function index($id)
    {
        return view('test.index', compact('id'));
    }

    public function store(Request $request)
    {
        $test = Test::create([
            'lection_id' => $request->lection_id,
            'title' => $request->title
        ]);

        foreach ($request->questions as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $key => $text) {
                    $new_question = Question::create(['text' => $text]);

                    $i = 'a';
                    foreach ($request->answers['new'][$key] as $answer) {
                        $new_answer = Answer::create(['text' => $answer]);

                        QuestionAnswer::create([
                            'question_id' => $new_question->id,
                            'answer_id' => $new_answer->id,
                            'is_correct' => ($request->correct[$key][0] == $i) ? 1 : 0
                        ]);

                        $i++;
                    }

                    TestQuestion::create(['test_id' => $test->id, 'question_id' => $new_question->id]);
                }
            }
        }

        Session::flash('status', 'Данные успешно добавлены.');
        return redirect()->back();
    }

    public function edit($id)
    {
        $test = Test::find($id);

        return view('test.edit', compact('test'));
    }

    public function update(Request $request, $id)
    {
        $test = Test::find($id);
        $test->title = $request->title;
        $test->update();

        $old_answers_arr = [];
        foreach ($request->answers as $k => $v) {
            if ($k != 'new') {
                foreach ($v as $key => $value) {
                    $old_answers_arr[$key] = $value;
                }
            }
        }

        foreach ($request->questions as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $key => $text) {
                    $new_question = Question::create(['text' => $text]);

                    $i = 'a';
                    foreach ($request->answers['new'][$key] as $answer) {
                        $new_answer = Answer::create(['text' => $answer]);

                        QuestionAnswer::create([
                            'question_id' => $new_question->id,
                            'answer_id' => $new_answer->id,
                            'is_correct' => ($request->correct[$key][0] == $i) ? 1 : 0
                        ]);

                        $i++;
                    }

                    TestQuestion::create(['test_id' => $id, 'question_id' => $new_question->id]);
                }
            } else {
                $old_question = Question::find($k);
                $old_question->text = $v;
                $old_question->save();

                $i = 'a';
                foreach ($old_question->answers as $answer) {
                    $answer->text = $old_answers_arr[$answer->id];
                    $answer->save();

                    $q_a = QuestionAnswer::where(['question_id' => $old_question->id, 'answer_id' => $answer->id])->first();

                    $q_a->is_correct = ($request->correct[$old_question->id][0] == $i) ? 1 : 0;
                    $q_a->save();
                    $i++;
                }
            }

        }

        Session::flash('status', 'Данные успешно сохранены.');
        return redirect()->back();
    }
}