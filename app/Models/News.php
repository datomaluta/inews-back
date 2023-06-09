<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	use HasFactory;

	protected $fillable = [
		'title',
		'thumbnail',
		'body',
	];

	public function categories()
	{
		return $this->belongsToMany(Category::class, 'category_news');
	}
}
