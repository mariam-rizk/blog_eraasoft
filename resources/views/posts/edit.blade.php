@extends('layouts.app')
@section("title","Edit Post")
<!-- Page Header-->
@section("header_content")
    <div class="site-heading">
        <h1>Edit Post</h1>
        <span class="subheading">A Blog Theme by Start Bootstrap</span>
    </div>
@endsection

@section("content")
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="my-5">
                        <form id="contactForm" method="POST" action="/posts/{{ $post->id }}">
                            @csrf
                            @method('PUT')

                            <div class="form-floating mb-3">
                                <input class="form-control" id="title" type="text" name="title" placeholder="Enter post title here..." value="{{ old('title', $post->title) }}" required>
                                <label for="title">Title</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="content" name="content" placeholder="Enter post content here..." style="height: 12rem" required>{{ old('content', $post->content) }}</textarea>
                                <label for="content">Content</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="is_publish" name="is_publish" required>
                                    <option value="0" {{ old('is_publish', $post->is_publish) == 0 ? 'selected' : '' }}>False</option>
                                    <option value="1" {{ old('is_publish', $post->is_publish) == 1 ? 'selected' : '' }}>True</option>
                                </select>
                                <label for="is_publish">Is Published</label>
                            </div>

                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
