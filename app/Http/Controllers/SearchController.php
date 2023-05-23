<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class SearchController extends Controller
{
	public function search(Request $request)
	{
		$query = $request->input('query');

		$news = News::where('title', 'like', '%' . $query . '%')->latest()->paginate(8);

		return response()->json(['data'=>$news], 200);
	}
}
