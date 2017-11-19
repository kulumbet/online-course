<?php
/**
 * Created by PhpStorm.
 * User: kjyer
 * Date: 20-Nov-17
 * Time: 3:01 AM
 */

namespace App\Http\Controllers;

use App\Models\Lection;
use App\Models\TestResult;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatisticsController extends Controller
{
    public function index(Request $request)
    {
        $total_users = 0;
        $total_tests_done = 0;
        $total_users_done_test = 0;

        $filter = [];

        if ($request->lection_title) {
            $lection = Lection::where('title', $request->lection_title)->first();
            if ($lection)
                $filter['test_id'] = $lection->test->id;
            else
                $filter['test_id'] = 0;
        }

        if (Auth::user()->isAdmin()) {
            $total_users = User::all()->count();
            $total_tests_done = TestResult::all()->count();
            $total_users_done_test = TestResult::distinct('user_id')->count('user_id');

            if ($request->user_name) {
                $user = User::where('name', $request->user_name)->first();
                if ($user)
                    $filter['user_id'] = $user->id;
                else
                    $filter['user_id'] = 0;
            }
        } else {
            $filter['user_id'] = Auth::id();
        }

        $results = TestResult::where($filter)->paginate(10);


        return view('statistics', compact(
            'results',
            'total_users',
            'total_tests_done',
            'total_users_done_test'
        ));
    }
}