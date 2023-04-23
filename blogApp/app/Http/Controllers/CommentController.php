<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(CommentRequest $request)
    {
      
        Comment::create($request->validated());
        $success['status'] = true;
        $success['message'] = 'comment pasted!';
        return response()->json($success, 200);
        
        if (!$request->validated()) {
        $error['status'] = false;
        $error['message'] = 'unable to process request';
        return response()->json($error, 422);
        }
    
        //$success['data'] = ["patient"=>$user,"orders"=>$orders];
    }
}
