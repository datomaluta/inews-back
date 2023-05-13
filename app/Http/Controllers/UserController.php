<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;

class UserController extends Controller
{

	public function register(UserRegisterRequest $request)
	{
		$attributes = $request->validated();
		$attributes['password'] = bcrypt($attributes['password']);
		$user = User::create($attributes);

		if ($user) {
			auth()->login($user);
			return response()->json(['message'=>'User Registered Succesfully!']);
		} else {
			return response()->json(['message'=>'Something went wrong with user register!', 401]);
		}
	}

	public function login(LoginUserRequest $request)
	{
		$attributes = $request->validated();

		if (!auth()->attempt($attributes)) {
			return response()->json(['message'=>trans('auth.failed')], 401);
		}

		session()->regenerate();
		return response()->json(['message'=>'User loged in Succesfully!']);
	}

	public function getUser()
	{
		return ['user'=>auth()->user()];
	}

	public function logout()
	{
		session()->invalidate();
		return response(['message'=>'Logged out']);
	}
}
