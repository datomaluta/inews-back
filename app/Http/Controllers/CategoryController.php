<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
	public function getAllCategories()
	{
		return  response()->json(['data'=>Category::all()], 200);
	}
}
