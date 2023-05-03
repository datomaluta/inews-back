<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Models\News;

class NewsController extends Controller
{
	public function getAllNews()
	{
		$allNews = News::latest()->get();
		$test = News::latest()->paginate(10);
		return $test;
		return response()->json(['data'=>$test]);
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

	public function update($id, NewsUpdateRequest $request)
	{
		$attributes = $request->validated();
		$news = News::find($id);
		if ($request->hasFile('thumbnail')) {
			$path = $request->file('thumbnail')->store('thumbnails', 'public');
			$attributes['thumbnail'] = $path;
		}

		$news->update($attributes);
		return response()->json(['news'=>$attributes]);
	}

	public function destroy($id)
	{
		$news = News::find($id);
		if ($news) {
			$news->delete();
			return ['message'=>'Deleted Succesfully'];
		} else {
			return ['message'=>'Something went wrong with delete!'];
		}
	}
}
