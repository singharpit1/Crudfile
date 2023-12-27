<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
 public function index(){
    $data=['arpit','prince','rahul','himant'];
    return view('user',['user'=>'$data']);
 }
}
