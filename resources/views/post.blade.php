@extends('layouts.website')
@section("title","Sample Post")
<!-- Page Header-->
@section("header_photo", 'assets/img/post-bg.jpg')
@section("header_content")
    <div class="post-heading">
        <h1>{{ $post->title }}</h1>
        <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
        <span class="subheading">By {{ $post->user->name ?? 'Unknown' }} - {{ $post->created_at->format('M d, Y') }}
    </div>
@endsection

@section("content")
<div class="container px-4 px-lg-5 my-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

            <!-- Post Content -->
            <div class="mb-5">
                <p>{{ $post->content }}</p>
            </div>

            <!-- Comments Section -->
            <div class="mb-5">
                <h3 class="mb-4">Comments</h3>

                @foreach ($comments as $comment)
                    <div class="card mb-3">
                        <div class="card-body">
                            <strong>{{ $comment->user->name }}:</strong>
                            <p>{{ $comment->body }}</p>

                            <!-- Reply Form -->
                            <form method="POST" action="{{ route('comments.reply', $comment->id) }}" class="mb-3">
                                @csrf
                                <div class="input-group">
                                    <input type="text" name="reply_body" class="form-control" placeholder="Write a reply..." />
                                    <button class="btn btn-outline-primary" type="submit">Reply</button>
                                </div>
                            </form>

                            <!-- Replies -->
                            @foreach ($comment->replies as $reply)
                                <div class="ms-4 border-start ps-3 mt-2">
                                    <strong>{{ $reply->user->name }}:</strong>
                                    <p class="mb-1">{{ $reply->body }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- New Comment Form -->
            @auth
            <div class="mb-5">
                <h4 class="mb-3">Add a Comment</h4>
                <form method="POST" action="{{ route('comments.store', $post->id) }}">
                    @csrf
                    <div class="mb-3">
                        <textarea name="content" class="form-control" rows="3" placeholder="Write your comment..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </form>
                @else
                <p><a href="{{ route('login') }}">Login</a> to comment.</p>
                @endauth
            </div>



        </div>
    </div>
</div>
@endsection