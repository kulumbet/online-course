<?php
/**
 * Created by PhpStorm.
 * User: kjyer
 * Date: 19-Nov-17
 * Time: 6:07 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    protected $fillable = ['question_id', 'answer_id', 'is_correct'];
}