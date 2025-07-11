@extends('layouts.app')
@section("title","Edit Category")
<!-- Page Header-->
@section("header_content")
    <div class="site-heading">
        <h1>Edit Category</h1>
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
                        <form id="contactForm" method="POST" action="/categories/{{ $category->id }}">
                            @csrf
                            @method('PUT')

                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" name="name" placeholder="Enter post title here..." value="{{ old('name', $category->name) }}" required>
                                <label for="name">Name</label>
                            </div>
                            

                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
