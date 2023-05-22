<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('category_news', function (Blueprint $table) {
			$table->unsignedBigInteger('category_id');
			$table->unsignedBigInteger('news_id');
			$table->timestamps();

			$table->primary(['category_id', 'news_id']);

			$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
			$table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('category_news');
	}
};
