<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'name'    => 'required|unique:users,name',
			'email'   => 'required|unique:users,email|email',
			'password'=> 'required|min:4',
		];
	}
}
