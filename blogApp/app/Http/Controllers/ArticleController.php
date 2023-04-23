<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Like;
use App\Models\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index( Article $article)
    {
        $success['articles'] = $article->paginate(10);
        return response()->json($success, 200);
    }

    public function view( $id)
    {
        $success['comments'] = Comment::find($id);
        $success['article'] = Article::find($id);
        $success['views'] = View::find($id);
        $success['likes'] = Like::find($id);
        views($success['article'])->cooldown(4)->record();
        return response()->json($success, 200);
    }
   
}
