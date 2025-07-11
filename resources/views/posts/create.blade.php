@extends('layouts.app')
@section("title","Create Post")
<!-- Page Header-->
@section("header_content")
    <div class="site-heading">
        <h1>Create new Post</h1>
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
           
                            <form id="contactForm" method="POST" action="/posts">
                                @csrf
                                <div class="form-floating">
                                    <input class="form-control" id="title" type="text" placeholder="Enter post title here..." name="title" required />
                                    <label for="title">Title</label>
                                </div>

                                <div class="form-floating">
                                    <textarea class="form-control" id="content" placeholder="Enter post content here..." name="content" style="height: 12rem" required></textarea>
                                    <label for="content">Content</label>
                                </div>
                                <br />
                                <div class="form-floating">
                                    <select class="form-select" id="is_publish" name="is_publish" required>
                                        <option value="0">False</option>
                                        <option value="1">True</option>   
                                    </select>
                                    <label for="is_publish">Is Published</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="categories[]" multiple required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="categories">Categories</label>
                                </div>

                                <br />
                                

                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
       