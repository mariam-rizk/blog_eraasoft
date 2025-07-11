@extends('layouts.app')
@section("title","All Posts")
<!-- Page Header-->
@section("header_content")
    <div class="site-heading">
        <h1>Clean Blog</h1>
        <span class="subheading">A Blog Theme by Start Bootstrap</span>
    </div>
@endsection

@section("content")
<div class="container px-4 px-lg-5 my-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>All Posts</h2>
        <a href="/posts/create" class="btn btn-primary">Add Post</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Published</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ Str::limit($post->content, 50) }}</td>
                <td>{{ $post->is_publish ? 'Yes' : 'No' }}</td>
                <td>{{ $post->created_at->format('Y-m-d') }}</td>
                <td>{{ $post->updated_at->format('Y-m-d') }}</td>
                <td>
                    <a href="/posts/{{ $post->id }}/show" class="btn btn-sm btn-primary">show</a>
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
