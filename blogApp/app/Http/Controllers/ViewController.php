<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\View;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function views(Article $article)
    {
        $success = views($article)->count();
        return response()->json($success, 200);
    }
}
