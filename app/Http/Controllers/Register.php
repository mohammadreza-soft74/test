<?php

namespace App\Http\Controllers;

use App\candidates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Register extends Controller
{
    public function home()
    {
        return view("home");
    }

    public function register(Request $request)
    {
        $this->validate($request,[
            "username" =>"required|string",
            "password" => "required|string",
            "address" => "required|string",
            "address2" => "required|string",
            "city" => "required|string",
            "zip" => "required|string",

            ]);

        $candidate = new candidates();
        $candidate->username = $request->username;
        $candidate->password = $request->password;
        $candidate->address = $request->address;
        $candidate->address2 = $request->address2;
        $candidate->city = $request->city;
        $candidate->state = "ss";
        $candidate->zip = $request->zip;
        $candidate->save();
        return  redirect("/")->with("response","register successful");

    }

    public function	getData()
	{

		$records = DB::table("candidates")->paginate(1);
		return view('show',compact('records'));
	}

	public function store(Request $request)
	{
		$candidate = new candidates();
		$candidate->username = $request->username;
		$candidate->password = $request->password;
		$candidate->address = "ss";
		$candidate->address2 = "ss";
		$candidate->city ="ss";
		$candidate->state = "ss";
		$candidate->zip = "ss";
		$candidate->save();
	}

	public function show()
	{

		return view("home");

	}
}
