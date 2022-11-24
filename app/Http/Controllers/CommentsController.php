<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie; 
use App\Http\Requests\StoreCommentRequest;

class CommentsController extends Controller
{
    public function store(StoreCommentRequest $request, $id)                                
    {
        $validated = $request->validated();
        Movie::find($id)->addComment($validated['content']);                           
        $request = request();
        return redirect()->back();
    }
}
