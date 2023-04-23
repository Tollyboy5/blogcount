<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    //
    public function store(Request $request, $id, Article $article)
    {
        View::create(['articles_id'=>$id])->save();
        $count = views($article)->unique()->count();
        Like::create(['articles_id'=>$count])->save();
        return response()->json('liked!', 200);
    }
}
