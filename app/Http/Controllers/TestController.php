<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class TestController extends Controller
{
	public function index()
	{
		$query = query();
		//全件取得
		//$users = $query->get();
		//ページネーション
		$users = $query->orderBy('id','desc')->paginate(10);
		return view('test.test')->with('test',$test);
	}
}
