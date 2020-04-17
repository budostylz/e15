<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {

        dump('test view');
        //$user = Redis::get('user:profile:'.$id);

        //return view('user.profile', ['user' => $user]);
    }
}