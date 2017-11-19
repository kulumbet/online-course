<?php
/**
 * Created by PhpStorm.
 * User: kjyer
 * Date: 18-Nov-17
 * Time: 11:19 PM
 */

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use App\Models\Test;
use App\Models\TestResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TestController
{
    public function index()
    {
//        $lections = Lection::paginate(10);
//
//        return view('lection.index', compact('lections'));
    }

    public function show($id)
    {
        $test = Test::find($id);

        return view('test.view', compact('test'));
    }

    public function update(Request $request, $id)
    {
        $test = Test::find($id);

        $corrects_count = 0;
        foreach ($request->answer as $question_id => $answer) {
            foreach ($answer as $answer_id => $v) {
                $q_a = QuestionAnswer::where(['question_id' => $question_id, 'answer_id' => $answer_id])->first();
                if ($q_a->is_correct) {
                    $corrects_count++;
                }
            }
        }

        $total_questions = $test->questions->count();
        $wrongs_count = $total_questions - $corrects_count;

        TestResult::create(['user_id' => Auth::id(), 'test_id' => $id, 'corrects_count' => $corrects_count, 'wrongs_count' => $wrongs_count]);

        Session::flash('status', 'Тест пройден: ' . $corrects_count . ' прав./' . $wrongs_count . 'неправ.');
        return redirect()->back();
    }
}