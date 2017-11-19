<?php
/**
 * Created by PhpStorm.
 * User: kjyer
 * Date: 20-Nov-17
 * Time: 2:20 AM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    protected $fillable = ['user_id', 'test_id', 'corrects_count', 'wrongs_count'];

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}