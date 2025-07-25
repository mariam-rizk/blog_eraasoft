<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        Comment::create([
            'body' => $request->input('content'),
            'user_id' => auth()->id(),
            'post_id' => $postId,
        ]);

        return back()->with('success', 'Comment added!');
    }

    public function reply(Request $request, $commentId)
    {
        $request->validate([
            'reply_body' => 'required|string|max:1000',
        ]);

        Reply::create([
            'body' => $request->input('reply_body'),
            'user_id' => auth()->id(),
            'comment_id' => $commentId,
        ]);

        return back()->with('success', 'Reply added!');
    }
}

