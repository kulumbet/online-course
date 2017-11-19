<?php
/**
 * Created by PhpStorm.
 * User: kjyer
 * Date: 19-Nov-17
 * Time: 6:11 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    protected $fillable = ['test_id', 'question_id'];
}