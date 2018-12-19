<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class indexController 
{
	public function tryer(){
		return view('index.tryer')
	}
	public function index(Request $request){
		$username = $request->username;
		$password = $request->password;
		$pattern = '/[0-9a-zA-Z]*/';
		$int = preg_match($pattern, $username);
		if($int){
			$res = DB::table('user')
					->where('username','eq',$username)
					->where('password','eq',$password)
					->first();
			if(is_object($res)){
				$code = 0;
				$data = json_decode(json_encode($res),true);
				$mess = "";
			}else{
				$code = 2;
				$data = "";
				$mess = "用户名不存在";
			}
		}else{
			$code = 1;
			$data = "";
			$mess = "用户名格式错误";
			
		}
			
		$arr = [
		"code"    => $code,
		"data"    => $data,
		"message" => $mess
		];
		return json_encode($arr);
	}
}
?>