<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Models\Category;
use App\Models\News;

class NewsController extends Controller
{
	public function test()
	{
		$category = Category::find(1);
		$news = $category->news;
		return $news;
	}

	public function create(NewsCreateRequest $request)
	{
		$attributes = $request->validated();

		$path = $request->file('thumbnail')->store('thumbnails', 'public');

		$attributes['thumbnail'] = $path;

		$news = News::create($attributes);

		$categoryIds = array_column(json_decode($attributes['category']), 'value');
		$categoryCreate = $news->categories()->sync($categoryIds);

		if ($news && $categoryCreate) {
			return response()->json(['News Created Successfully'], 200);
		} else {
			return response()->json(['message'=>'Something went wrong with news create!'], 404);
		}
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

		// Get the updated category IDs
		$categoryIds = array_column(json_decode($attributes['category']), 'value');

		// Update the categories
		$categoryUpdate = $news->categories()->sync($categoryIds);

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

	public function newsByCategory($category, $count)
	{
		$categorydb = Category::where('name', $category)->first();

		if (!$categorydb) {
			return response()->json(['message'=>'Record not found'], 404);
		}

		if ($count === 'all') {
			$news = $categorydb->news()->latest()->paginate(8);
		} else {
			$news = $categorydb->news()->latest()->take($count)->get();
		}

		return response()->json(['data'=>$news], 200);
	}

	public function getAllNewsByCategoryForEachPage($category)
	{
		$categorydb = Category::where('name', $category)->first();

		if (!$categorydb) {
			return response()->json(['message'=>'Record not found'], 404);
		}

		$allNews = $categorydb->news()->latest()->paginate(8);
		return response()->json(['data'=>$allNews], 200);
	}

	public function getAllNews()
	{
		$allNews = News::latest()->paginate(8);

		if (!$allNews) {
			return response()->json(['message'=>'Record not found'], 404);
		}

		return response()->json(['data'=>$allNews], 200);
	}

	public function getNews($id)
	{
		$news = News::find($id);
		if (!$news) {
			return response()->json(['message'=>'Record not found'], 404);
		}
		return  response()->json(['data'=>$news, 'category'=>$news->categories], 200);
	}
}
