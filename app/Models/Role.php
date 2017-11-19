<?php
/**
 * Created by PhpStorm.
 * User: kjyer
 * Date: 18-Nov-17
 * Time: 3:54 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const
        ADMIN = 'admin',
        USER  = 'user'
    ;

}