<?php
/**
 * Created by PhpStorm.
 * User: kjyer
 * Date: 18-Nov-17
 * Time: 9:11 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lection extends Model
{
    public function test()
    {
        return $this->hasOne(Test::class, 'lection_id', 'id');
    }
}