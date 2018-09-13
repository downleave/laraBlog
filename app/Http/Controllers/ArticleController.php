<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
    public function show($id)
	{
	    if(Cache::has("article:{$id}")){
	        $content = Cache::get("article:{$id}");
        }else{
            $content = Article::with('hasManyComments')->find($id);
            Cache::put("article:{$id}",$content,10);
        }
	    return view('article/show')->withArticle($content);
	}
}