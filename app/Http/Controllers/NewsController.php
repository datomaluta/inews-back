<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use App\Models\News;

class NewsController extends Controller
{
	public function getAllNews()
	{
		$allNews = News::latest()->get();

		return response()->json(['data'=>$allNews]);
	}

	public function getNews($id)
	{
		$news = News::find($id);
		if (!$news) {
			return response()->json(['message'=>'Record not found'], 404);
		}
		return  response()->json(['data'=>$news], 200);
	}

	public function create(NewsCreateRequest $request)
	{
		$attributes = $request->validated();

		$path = $request->file('thumbnail')->store('thumbnails', 'public');

		$attributes['thumbnail'] = $path;

		News::create($attributes);

		return ['message'=>'News Created Succesfully!'];
	}
}
