<?php
/**
 * Created by PhpStorm.
 * User: kjyer
 * Date: 18-Nov-17
 * Time: 3:48 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'user_id', 'role_id',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function getRoleNameAttribute()
    {
        return $this->role->name;
    }
}