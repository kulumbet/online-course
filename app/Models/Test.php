<?php
/**
 * Created by PhpStorm.
 * User: kjyer
 * Date: 18-Nov-17
 * Time: 11:21 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['lection_id', 'title'];

    public function lection()
    {
        return $this->belongsTo(Lection::class);
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'test_questions');
    }
}