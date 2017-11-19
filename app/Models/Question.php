<?php
/**
 * Created by PhpStorm.
 * User: kjyer
 * Date: 18-Nov-17
 * Time: 11:36 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['text'];

    public function answers()
    {
        return $this->belongsToMany(Answer::class, 'question_answers');
    }

    public function isCorrect($answer_id)
    {
        $q_a = QuestionAnswer::where(['question_id' => $this->id, 'answer_id' => $answer_id])->first();

        return $q_a->is_correct;
    }
}