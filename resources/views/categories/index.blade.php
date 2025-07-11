@extends('layouts.app')
@section("title","All Categories")
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
        <h2>All Categories</h2>
        <a href="/categories/create" class="btn btn-primary">Add Category</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Related Posts</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category )
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->posts()->count()}}</td>
                <td>{{ $category->created_at->format('Y-m-d') }}</td>
                <td>{{ $category->updated_at->format('Y-m-d') }}</td>
                <td>
                    <a href="/categories/{{ $category->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <form action="/categories/{{ $category->id }}" method="POST" style="display:inline;">
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
