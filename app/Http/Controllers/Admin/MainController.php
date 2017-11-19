<?php
/**
 * Created by PhpStorm.
 * User: kjyer
 * Date: 18-Nov-17
 * Time: 4:29 PM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }
}