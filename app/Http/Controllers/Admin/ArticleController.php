<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

class ArticleController extends Controller
{
    //
	function index() {
		        return view('admin/article/index')->withArticles(Article::all());

	}
}
