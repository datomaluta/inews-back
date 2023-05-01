<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsCreateRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'title'    => 'required|max:255',
			'thumbnail'=> 'required|image',
			'body'     => 'required',
		];
	}
}
