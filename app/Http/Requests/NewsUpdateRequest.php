<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsUpdateRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'title'    => 'sometimes|required|max:255',
			'thumbnail'=> 'sometimes|required|image',
			'body'     => 'sometimes|required',
		];
	}
}
