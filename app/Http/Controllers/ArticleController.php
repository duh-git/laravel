<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
	public function index()
	{
		$articles = Article::latest()->paginate(5);

		return view("articles.index", compact("articles"));
	}

	public function create()
	{
		return view("articles.create");
	}

	public function store(Request $request)
	{
		request()->validate([
			'title' => 'required',
			'shortDesc' => 'required',
			'desc' => 'required',
		]);

		$article = new Article();
		$article->create(request()->all());

		return redirect()->route('articles.index');
	}

	public function show(Article $article)
	{
		return view("articles.show", compact("article"));
	}

	public function edit(Article $article)
	{
		return view("articles.edit", compact("article"));
	}

	public function update(Request $request, Article $article)
	{
		request()->validate([
			'title' => 'required',
			'shortDesc' => 'required',
			'desc' => 'required',
		]);

		$article->update($request->all());

		return redirect()->route('articles.show', ['article' => $article->id]);
	}

	public function destroy(Article $article)
	{
		$article->delete();

		return redirect()->route('articles.index');
	}
}
