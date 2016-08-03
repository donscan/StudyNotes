<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class TestController extends Controller
{
    //
    public function index()
    {
      DB::insert('insert into users(id,name,email,password)values(?,?,?,?)',[1,'Laravel','laravel@test.com','123']);
      DB::insert('insert into users(id,name,email,password)values(?,?,?,?)',[2,'Academy','academy@test.com','123']);
    }
}
